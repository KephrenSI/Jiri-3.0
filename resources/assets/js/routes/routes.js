import Dashboard from '../pages/Dashboard.vue';
import Jiries from '../pages/Jiries.vue';
import Judges from '../pages/Judges.vue';
import Projects from '../pages/Projects.vue';
import Students from '../pages/Students.vue';


export default [
    {
        path: '/home',
        redirect: '/Dashboard'
    },
    // {
    //     path: '/',
    //     redirect: '/Dashboard'
    // },
    // {
    //     path: '*',
    //     redirect: '/Dashboard'
    // },
    {
        path: '/Dashboard',
        name:'Dashboard',
        component: Dashboard
    },
    {
        path: '/Jiries',
        name:'Jiries',
        component: Jiries
    },
    {
        path: '/Judges',
        name:'Judges',
        component: Judges
    },
    {
        path: '/Projects',
        name:'Projects',
        component: Projects
    },
    {
        path: '/Students',
        name:'Students',
        component: Students
    }
]