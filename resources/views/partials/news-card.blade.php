<div class="bar txt-center">
    NEWS E APPROFONDIMENTI DAL MONDO LA MOLISANA
</div>
<div class="news-cards">
    <div class="card txt-center" v-for="(el, i) in newsCards">
        <img class="img-resp" :src="el.imgCover" alt="">
        <div class="card-txt">
            <small class="mb-25">@{{el.date}}</small>
            <h5 class="mb-25">@{{el.txt}}</h5>
            <button class="btn btn-outline">
                READ MORE
            </button>
        </div>
    </div>
</div>