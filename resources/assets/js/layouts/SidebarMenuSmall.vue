<template>
    <nav class="asideLeft fixed-top">
        <h2 class="heading2 hidden" role="heading" aria-level="2">Main navigation</h2>
        <div class="user">
            <img v-for="image in images" :src="image.url" :alt="image.name" class="user__userPic" width="50" height="50">
            <div class="user__userInfos">
                <p class="user__userInfos--name">Képhren Simonis</p>
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
                        <div v-html="routes.icons" class="asideNav__el--icon" ></div>
                        {{routes.text}}
                    </router-link>
                </li>
            </ul>
        </nav>
    </nav>
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
                images : [
                    {
                        url : '../../img/profil.png',
                        name : 'photo de profil par défaut',
                    },
                ]
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
            }
        },
        mounted() {
            console.log('SideabarMenuSmall mounted.')
        },
    }
</script>