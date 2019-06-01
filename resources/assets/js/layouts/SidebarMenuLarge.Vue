<template>
    <section class="asideLeft fixed-top">
        <div class="asideLeft__filter">
            <span class="notEmpty">&nbsp;</span>
        </div>
        <h2 class="heading2 hidden" role="heading" aria-level="2">Main navigation</h2>
        <img class="logo" :src="images.logo.url" :alt="images.logo.name" height="80" width="160"/>

        <div class="user">
            <img :src="images.userProfil.url" :alt="images.userProfil.name" class="user__userPic" width="50" height="50">
            <div class="user__userInfos">
                <p class="user__userInfos--name">{{ user.name }}</p>
                <p class="user__userInfos--email">{{ user.email }}</p>
                <p class="user__userInfos--company">Hepl</p>
            </div>
            <div class="user__links">
                <a href="" class="user__links--logout" @click.prevent="logout()">
                    <div v-html="icons.logout"></div>
                    Déconnexion
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        <input type="hidden" name="_token" :value="token">
                    </form>
                </a>
                <a href="" class="user__links--modify">
                    modifier
                </a>
            </div>
        </div>

        <nav>
            <ul class="asideNav">
                <li class="asideNav__el"
                    v-for="routes in links"
                    v-bind:key="routes.id"
                >
                    <router-link :to="`${routes.page}`"
                                 active-class="active"
                                 class="asideNav__el--link"
                                 exact
                    >
                        <div v-html="routes.icons" class="icon" ></div>
                        {{routes.text}}
                    </router-link>
                </li>
            </ul>
        </nav>
    </section>
</template>

<script>
    var speedometer = require ('!html-loader!speedometer.svg');
    var exam = require ('!html-loader!exam.svg');
    var auction = require ('!html-loader!auction.svg');
    var graduation_hat = require ('!html-loader!graduation-hat.svg');
    var transfer = require ('!html-loader!transfer.svg');

    var logout = require ('!html-loader!logout.svg');

    export default {
        data() {
            return {
                user: {
                    name: '',
                },
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                icons: {
                    logout: logout,
                },
                links: [
                    {
                        id: 0,
                        text: 'Accueil',
                        page:'/Dashboard',
                        icons: speedometer,
                    },
                    {
                        id: 1,
                        text: 'Épreuves',
                        page:'/Jiries',
                        icons: exam,
                    },
                    {
                        id: 2,
                        text: 'Jurys',
                        page:'/Judges',
                        icons: auction,
                    },
                    {
                        id: 3,
                        text: 'Étudiants',
                        page:'/Students',
                        icons: graduation_hat,
                    },
                    {
                        id: 4,
                        text: 'Projets',
                        page:'/Projects',
                        icons: transfer,
                    }
                ],
                images : {
                    userProfil: {
                        url: 'images/profil.png',
                        name: 'photo de profil par défaut',
                    },
                    logo: {
                        url: 'images/logoBlanc.png',
                        name: 'logo de l\'application Jiri',
                    },
                }
            }
        },
        computed: {
            token() {
                let token = document.head.querySelector('meta[name="csrf-token"]');
                return token.content
            }
        },
        methods:{
            logout(){
                document.getElementById('logout-form').submit()
            },
            currentUser() {
                axios.get('api/user')
                    .then(response => {
                        this.user = response.data;
                        console.log(response.data)
                    })
                    .catch( error => {
                        console.log(error);
                    });
            },
        },
        created() {
            this.currentUser();
        },
        mounted() {
            console.log('SideabarMenuLarge mounted.')
        },
    }
</script>