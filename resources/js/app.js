require('./bootstrap');
import Vue from 'vue';

const app = new Vue ({
    el: ('#molisana'),
    data: {
        isVisible: false,
        newsCards: [
            {
                date: '05/01/2021',
                txt: 'Comunicato stampa',
                imgCover: window.location.hash + "img/news/lamolisana-news-img-olmq92axwdqdc64hobrlnzsgmtjjfhifctlylio818.jpg",
            },
            {
                date: '23/11/2020',
                txt: 'Nuovo automezzo donato all’Unitalsi di Campobasso',
                imgCover: window.location.hash + "img/news/unitalsi-articolo-cover-oyu29ktnj3sx9wiygrqgbc237zov11w4moayal4fjg.jpg",
            },
            {
                date: '23/11/2020',
                txt: '5000 pacchetti di pasta a Roma per la giornata dei poveri',
                imgCover: window.location.hash + "img/news/pranzo-poveri-m-ognt1fwyr0j9sg0u5ussfinxjoee7sltzgddwctwa4.jpg",
            },
            {
                date: '30/10/2020',
                txt: 'Prosegue l’attivita formativa di primo soccorso, in sala macchine simulazione di folgorazione',
                imgCover: window.location.hash + "img/news/folgorazione-m-oxoohua2q1zxpbm855nbs47p1fp3u1m2a7z0rlfnak.jpg",
            },
            {
                date: '26/10/2020',
                txt: 'La Molisana rinnova la partnership con AC Milan per la stagione 2020-2021',
                imgCover: window.location.hash + "img/news/la-molisana-milan-partner-2021-m-oxhc351rl9m47427o59b9mlyhy5ue01390ybvownu4.jpg",
            },
            {
                date: '16/10/2020',
                txt: 'Il console americano Mary Avery in visita al pastificio',
                imgCover: window.location.hash + "img/news/console-m-ox074j7lecyux67g0hlyreauyzey6rgm8qapvosmgc.jpg",
            },
            {
                date: '02/10/2020',
                txt: 'Attività formative di primo soccorso in azienda',
                imgCover: window.location.hash + "img/news/primo-soccorso-m-owbf13zsondizhneix5ni41kai8unggjs5a23wnhkc.jpg",
            },
            {
                date: '09/09/2020',
                txt: 'Food Awards 2020, Trighetto premiato come miglior packaging',
                imgCover: window.location.hash + "img/news/premio-cibus-2020-m-ov7px6vg3t1v4imh8rvtfbd6q8htows7cl2an0zv70.jpg",
            },
            {
                date: '14/07/2020',
                txt: 'Corso teorico-pratico antincendio e di primo soccorso in azienda',
                imgCover: window.location.hash + "img/news/sicurezza-m-osg380gq7jw5myc88fnpzlffu2ch0onni39k0y957w.jpg",
            },
            {
                date: '08/07/2020',
                txt: 'Nuova caldaia a vapore in fabbrica, azienda sempre più innovativa',
                imgCover: window.location.hash + "img/news/foto-news-caldaia-os617rgmjzq424erf68fo8knl0nc6vizqfwgb1au98.jpg",
            },
            {
                date: '03/07/2020',
                txt: 'Donati tre computer all’Associazione italiana persone down di Campobasso',
                imgCover: window.location.hash + "img/news/foto-news-computer-m-orxc5f1pgrh0vz7qbi5z49qgwyqrkh1fjewgszyc30.jpg",
            },
            {
                date: '18/06/2020',
                txt: 'Industria Felix Magazine, La Molisana tra le aziende premiate per performance gestionale e affidabilità finanziaria',
                imgCover: window.location.hash + "img/news/bologna-la-molisana-img-oe1i7nbtgx2bs0dlvrqsj8rueymuyvbctc47kmfvsc.jpg",
            },
            {
                date: '23/04/2020',
                txt: 'Tredici tablet Surface donati alla terapia intensiva del Cardarelli',
                imgCover: window.location.hash + "img/news/news-molisana-23-aprile-cover-ooj61fezvewy5l9hxmppwsoaxkyu5q0k8tpetwdfos.jpg",
            },
            {
                date: '22/03/2020',
                txt: '“Spirito Tenace”, in onda da stasera il nuovo spot de La Molisana',
                imgCover: window.location.hash + "img/news/nuovo-spot-box-on1mmmtq9lmhw5gc2t2fcb8t6nn74l9342vxrwv4j0.jpg",
            },
            {
                date: '11/03/2020',
                txt: 'La Molisana acquista tre ventilatori polmonari per l’Ospedale Cardarelli di Campobasso',
                imgCover: window.location.hash + "img/news/lamolisana-news-img-olmq92axwdqdc64hobrlnzsgmtjjfhifctlylio818.jpg",
            },
            {
                date: '24/02/2020',
                txt: 'La Molisana sceglie Saatchi & Saatchi come nuovo partner creativo',
                imgCover: window.location.hash + "img/news/lamolisana-news-img-olmq92axwdqdc64hobrlnzsgmtjjfhifctlylio818.jpg",
            },
            {
                date: '10/01/2020',
                txt: 'Trighetto allo Stadio Olimpico con lo Chef Di Gravio',
                imgCover: window.location.hash + "img/news/chef-di-gravio-news-ojgymnja3wqgis0biuh453dhpsxhl6g6ieo9gjorl8.jpg",
            },
        ]
    },
    created() {
    },
    methods: {
    }
});