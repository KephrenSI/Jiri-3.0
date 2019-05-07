import Dashboard from '../views/Dashboard.vue';
import ListEvents from '../views/ListEvents.vue';
import ListJudges from '../views/ListJudges.vue';
import ListProjects from '../views/ListProjects.vue';
import ListStudents from '../views/ListStudents.vue';


export default [
    {
        path: '/',
        redirect: '/Dashboard'
    },
    {
        path: '/Dashboard',
        name:'Dashboard',
        component: Dashboard
    },
    {
        path: '/Events',
        name:'ListEvents',
        component: ListEvents
    },
    {
        path: '/Judges',
        name:'ListJudges',
        component: ListJudges
    },
    {
        path: '/Projects',
        name:'ListProjects',
        component: ListProjects
    },
    {
        path: '/Students',
        name:'ListStudents',
        component: ListStudents
    }
]
