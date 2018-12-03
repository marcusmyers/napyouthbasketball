Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'announcement',
            path: '/announcement',
            component: require('./components/Tool'),
        },
    ])
})
