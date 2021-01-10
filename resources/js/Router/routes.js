import Home from '../Pages/Home';
import Panel from '../Pages/Panel';
import RoomForm from '../Pages/RoomForm';
import Room from '../Pages/Room';

const routes =  [
	{
		path: '/',
		name: 'home',
		component: Home
	},
	{
		path: '/panel',
		name: 'panel',
		component: Panel
	},
	{
		path: '/room/create',
		name: 'roomCreate',
		component: RoomForm
	},
	{
		path: '/room/:id',
		name: 'room',
		component: Room
	}
];

export default routes;
