
<div id="app">
    <header class="p-4">
        <i class="fa-brands fa-spotify text-white fa-3x"></i>
    </header>

    <div class="container">
        <div class="row pb-4">
            <div class="col-4 g-5 text-white" v-for="(elem, index) in arrayDischi" :key="index">
                <div class="card" style="width: 20rem;">
                    <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                    <div class="card-body">
                        <h5 class="card-title">{{elem.title}}</h5>
                        <div class="card-text">{{elem.author}}</div>
                        <div class="card-text">{{elem.year}}</div>
                        <div class="card-text">{{elem.genre}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>