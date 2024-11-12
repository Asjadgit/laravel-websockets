// Import dependencies
import React, { useEffect } from 'react';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

const NotificationComponent = () => {

    // console.log('Reverb App Key:', import.meta.env.VITE_REVERB_APP_KEY);
    // console.log('Reverb Host:', import.meta.env.VITE_REVERB_HOST || 'host');
    // console.log('Reverb Port:', parseInt(import.meta.env.VITE_REVERB_PORT, 10) || 6001);


    useEffect(() => {
        // Set up Echo with Reverb configuration
        const echo = new Echo({
            broadcaster: 'reverb',
            key: import.meta.env.VITE_REVERB_APP_KEY || "123",
            wsHost: import.meta.env.VITE_REVERB_HOST || "localhost",
            wsPort: parseInt(import.meta.env.VITE_REVERB_PORT),
            forceTLS: true,
            disableStats: true,
        });

        // Listen to the "testing-channel" channel and the "NotificationEvent" event
        echo.channel('NotificationChannel')
            .listen('.NotificationEvent', (data) => {
                console.log('Broadcast message received:', data.message);
                alert(`New Notification: ${data.message}`); // This should show the alert
            })
            .subscribed(() => {
                console.log('Successfully subscribed to NotificationChannel');
            })
            .error((error) => {
                console.error('Subscription error:', error);
            });

        // Listen to the "testing-channel" channel and the "NotificationEvent" event
        echo.channel('CompleteChannel')
            .listen('.CompleteOrderEvent', (data) => {
                console.log('Broadcast message received:', data.message);
                alert(`New Notification: ${data.message}`); // This should show the alert
            })
            .subscribed(() => {
                console.log('Successfully subscribed to CompleteChannel');
            })
            .error((error) => {
                console.error('Subscription error:', error);
            });


        return () => {
            // Cleanup on component unmount
            echo.disconnect();
        };
    }, []);

    return <div>Listening for notifications...</div>;
};

export default NotificationComponent;
