export const routes = [{
        path: "/",
        name: "Landing",
        component: () => import("./components/Landing.vue"),
    },
    {
        path: "/map",
        name: "Map",
        component: () => import("./components/Map/GoogleMap_main.vue"),
    },
    {
        path: "/user-input",
        name: "UserData",
        component: () => import("./components/UserInput/UserInput_main.vue"),
    }

]
