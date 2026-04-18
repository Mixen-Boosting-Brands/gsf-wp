// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";

// import styles bundle
import "swiper/css/bundle";

// init Swiper:
const swiperGrupo = new Swiper(".swiperGrupo", {
    loop: true,
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
});
