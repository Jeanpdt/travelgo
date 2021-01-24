import Home from '../Pages/Home';
import Panel from '../Pages/Panel';
import RoomForm from '../Pages/RoomForm';
import Room from '../Pages/Room';
import Register from '../Pages/Register';
import Login from '../Pages/Login';
import Dashboard from '../Pages/user/Dashboard';
import Reservation from '../Pages/Reservation';



const routes =  [
	{
		path: '/',
		name: 'home',
		component: Login,
		meta: {
			auth: false
		}
	},
	{
		path: '/panel',
		name: 'panel',
		component: Panel,
		meta: {
			auth: false
		}
	},
	{
		path: '/room/create',
		name: 'roomCreate',
		component: RoomForm,
		meta: {
			auth: false
		}
	},
	{
		path: '/room/:id',
		name: 'room',
		component: Room,
		meta: {
			auth: false
		}
	},
	{
		path: '/register',
		name: 'register',
		component: Register,
		meta: {
			auth: false
		}
	},
	{
		path: '/login',
		name: 'login',
		component: Login,
		meta: {
			auth: false
		}
	},
	// USER ROUTES
	{
		path: '/dashboard',
		name: 'dashboard',
		component: Dashboard,
		meta: {
			auth: false
		}
	},
	{
		path: '/reservation',
		name: 'reservation',
		component: Reservation,
		meta: {
			auth: true
		}
	},
];

export default routes;
