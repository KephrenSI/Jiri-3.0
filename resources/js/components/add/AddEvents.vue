<template>
    <section class="contentAddForm">
        <h3 class="heading3" role="heading" aria-level="3">Créer un évènement</h3>
        <form method="POST" class="addForm form">
            <div class="addForm__labelInput labelInput">
                <label for="name" class="addForm__labelInput--label label">Nom</label>
                <input id="name" type="text" class="addForm__labelInput--input input" name="name" value="">
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="academicyear" class="addForm__labelInput--label label">Année académique</label>
                <select id="academicyear" type="select" class="addForm__labelInput--select select" name="academicyear" value="">
                    <option disabled value="">Année académique</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="session" class="addForm__labelInput--label label">Session</label>
                <select id="session" type="select" class="addForm__labelInput--select select" name="session" value="">
                    <option disabled value="">Session</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="date" class="addForm__labelInput--label label">Date</label>
                <select id="date" type="select" class="addForm__labelInput--select select" name="date" value="">
                    <option disabled value="">Date</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>

            <div class="addForm__labelInput labelInput">
                <label for="judges" class="addForm__labelInput--label label">Juges</label>
                <select id="judges" type="select" class="addForm__labelInput--select select" name="judges" value="">
                    <option disabled value="">Juges</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <ul class="addList">
                    <li class="addList__el">
                        <div class="addList__el--item">
                            <p>
                                name
                            </p>
                            <a href="">
                                <span class="notEmpty">&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" x="0px" y="0px" viewBox="0 0 512 512">
                                    <g>
                                        <g>
                                            <path d="M445.055,50.226H323.172V25.893C323.173,11.616,311.557,0,297.28,0H214.72c-14.277,0-25.893,11.616-25.893,25.893v24.333
			H66.944c-14.328,0-25.984,11.656-25.984,25.984v28.019c0,14.328,11.656,25.984,25.984,25.984h13.957L94.88,468.624
			C95.884,492.948,115.742,512,140.085,512h231.829c24.344,0,44.201-19.053,45.204-43.377l12.254-296.627
			c0.298-7.17-5.277-13.222-12.445-13.518c-0.185-0.006-0.365-0.01-0.546-0.01c-6.929,0-12.685,5.47-12.973,12.457l-12.254,296.627
			c-0.428,10.353-8.878,18.462-19.241,18.462H140.085c-10.362,0-18.813-8.11-19.242-18.462l-13.933-337.34h338.146
			c14.328,0,25.984-11.656,25.984-25.984V76.21C471.039,61.882,459.384,50.226,445.055,50.226z M214.813,25.987h82.372v24.239
			h-82.372V25.987z M445.055,104.225l-378.108,0.004l-0.003-28.016l378.108-0.003l0.018,28.015
			C445.07,104.225,445.065,104.225,445.055,104.225z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M189.9,227.036c-0.151-7.08-5.937-12.718-12.985-12.718c-0.092,0-0.187,0-0.281,0.003
			c-7.174,0.152-12.867,6.091-12.715,13.265l3.5,164.967c0.151,7.08,5.937,12.718,12.986,12.718c0.092,0,0.187,0,0.281-0.003
			c7.174-0.152,12.867-6.091,12.715-13.266L189.9,227.036z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M255.997,214.318c-7.175,0-12.993,5.817-12.993,12.993v164.966c0,7.176,5.818,12.993,12.993,12.993
			s12.993-5.817,12.993-12.993V227.311C268.99,220.135,263.172,214.318,255.997,214.318z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M335.362,214.321c-7.111-0.161-13.113,5.54-13.266,12.715l-3.5,164.966c-0.152,7.175,5.542,13.114,12.715,13.266
			c0.094,0.003,0.187,0.003,0.281,0.003c7.048,0,12.835-5.638,12.986-12.718l3.5-164.967
			C348.23,220.412,342.536,214.473,335.362,214.321z"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="addForm__labelInput labelInput">
                <label for="students" class="addForm__labelInput--label label">Élèves</label>
                <select id="students" type="select" class="addForm__labelInput--select select" name="students" value="">
                    <option disabled value="">Élèves</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <ul class="addList">
                    <li class="addList__el">
                        <div class="addList__el--item">
                            <p>
                                name
                            </p>
                            <a href="">
                                <span class="notEmpty">&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" x="0px" y="0px" viewBox="0 0 512 512">
                                    <g>
                                        <g>
                                            <path d="M445.055,50.226H323.172V25.893C323.173,11.616,311.557,0,297.28,0H214.72c-14.277,0-25.893,11.616-25.893,25.893v24.333
			H66.944c-14.328,0-25.984,11.656-25.984,25.984v28.019c0,14.328,11.656,25.984,25.984,25.984h13.957L94.88,468.624
			C95.884,492.948,115.742,512,140.085,512h231.829c24.344,0,44.201-19.053,45.204-43.377l12.254-296.627
			c0.298-7.17-5.277-13.222-12.445-13.518c-0.185-0.006-0.365-0.01-0.546-0.01c-6.929,0-12.685,5.47-12.973,12.457l-12.254,296.627
			c-0.428,10.353-8.878,18.462-19.241,18.462H140.085c-10.362,0-18.813-8.11-19.242-18.462l-13.933-337.34h338.146
			c14.328,0,25.984-11.656,25.984-25.984V76.21C471.039,61.882,459.384,50.226,445.055,50.226z M214.813,25.987h82.372v24.239
			h-82.372V25.987z M445.055,104.225l-378.108,0.004l-0.003-28.016l378.108-0.003l0.018,28.015
			C445.07,104.225,445.065,104.225,445.055,104.225z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M189.9,227.036c-0.151-7.08-5.937-12.718-12.985-12.718c-0.092,0-0.187,0-0.281,0.003
			c-7.174,0.152-12.867,6.091-12.715,13.265l3.5,164.967c0.151,7.08,5.937,12.718,12.986,12.718c0.092,0,0.187,0,0.281-0.003
			c7.174-0.152,12.867-6.091,12.715-13.266L189.9,227.036z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M255.997,214.318c-7.175,0-12.993,5.817-12.993,12.993v164.966c0,7.176,5.818,12.993,12.993,12.993
			s12.993-5.817,12.993-12.993V227.311C268.99,220.135,263.172,214.318,255.997,214.318z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M335.362,214.321c-7.111-0.161-13.113,5.54-13.266,12.715l-3.5,164.966c-0.152,7.175,5.542,13.114,12.715,13.266
			c0.094,0.003,0.187,0.003,0.281,0.003c7.048,0,12.835-5.638,12.986-12.718l3.5-164.967
			C348.23,220.412,342.536,214.473,335.362,214.321z"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="addForm__labelInput labelInput">
                <label for="projects" class="addForm__labelInput--label label">Projets</label>
                <select id="projects" type="select" class="addForm__labelInput--select select" name="projects" value="">
                    <option disabled value="">Projets</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
                <ul class="addList">
                    <li class="addList__el">
                        <div class="addList__el--item">
                            <p>
                                name
                            </p>
                            <a href="">
                                <span class="notEmpty">&nbsp;</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" x="0px" y="0px" viewBox="0 0 512 512">
                                    <g>
                                        <g>
                                            <path d="M445.055,50.226H323.172V25.893C323.173,11.616,311.557,0,297.28,0H214.72c-14.277,0-25.893,11.616-25.893,25.893v24.333
			H66.944c-14.328,0-25.984,11.656-25.984,25.984v28.019c0,14.328,11.656,25.984,25.984,25.984h13.957L94.88,468.624
			C95.884,492.948,115.742,512,140.085,512h231.829c24.344,0,44.201-19.053,45.204-43.377l12.254-296.627
			c0.298-7.17-5.277-13.222-12.445-13.518c-0.185-0.006-0.365-0.01-0.546-0.01c-6.929,0-12.685,5.47-12.973,12.457l-12.254,296.627
			c-0.428,10.353-8.878,18.462-19.241,18.462H140.085c-10.362,0-18.813-8.11-19.242-18.462l-13.933-337.34h338.146
			c14.328,0,25.984-11.656,25.984-25.984V76.21C471.039,61.882,459.384,50.226,445.055,50.226z M214.813,25.987h82.372v24.239
			h-82.372V25.987z M445.055,104.225l-378.108,0.004l-0.003-28.016l378.108-0.003l0.018,28.015
			C445.07,104.225,445.065,104.225,445.055,104.225z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M189.9,227.036c-0.151-7.08-5.937-12.718-12.985-12.718c-0.092,0-0.187,0-0.281,0.003
			c-7.174,0.152-12.867,6.091-12.715,13.265l3.5,164.967c0.151,7.08,5.937,12.718,12.986,12.718c0.092,0,0.187,0,0.281-0.003
			c7.174-0.152,12.867-6.091,12.715-13.266L189.9,227.036z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M255.997,214.318c-7.175,0-12.993,5.817-12.993,12.993v164.966c0,7.176,5.818,12.993,12.993,12.993
			s12.993-5.817,12.993-12.993V227.311C268.99,220.135,263.172,214.318,255.997,214.318z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M335.362,214.321c-7.111-0.161-13.113,5.54-13.266,12.715l-3.5,164.966c-0.152,7.175,5.542,13.114,12.715,13.266
			c0.094,0.003,0.187,0.003,0.281,0.003c7.048,0,12.835-5.638,12.986-12.718l3.5-164.967
			C348.23,220.412,342.536,214.473,335.362,214.321z"/>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="addForm__labelInput labelInput">
                <button type="submit" class="addForm__labelInput--button">
                    Ajouter un évènement
                </button>
            </div>
        </form>
    </section>
</template>

<script>
    export default {
        name: "ListEvents",
        mounted() {
            console.log('Events component mounted.')
        },
    }
</script>