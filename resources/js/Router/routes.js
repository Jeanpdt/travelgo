import Hello from "../Pages/Hello";
import Home from "../Pages/Home";

const routes =  [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/hello',
        name: 'hello',
        component: Hello
    }
]

export default routes
