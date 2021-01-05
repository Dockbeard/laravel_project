$(document).ready(function () {
    var btnsAds = $(".button1"),
        yoloWrapper = $(".yolo");

    for (let i = 0; i < btnsAds.length; i++) {
        const single_btnAds = btnsAds[i];
        const single_yoloWrapper = yoloWrapper[i];

        single_btnAds.addEventListener("click", (e) => {
            for (let i = 0; i < yoloWrapper.length; i++) {
                if (yoloWrapper[i].classList.contains("active-yoloWrapper")) {
                    yoloWrapper[i].classList.remove("active-yoloWrapper");
                }
            }

            single_yoloWrapper.classList.add("active-yoloWrapper");

            $(".close").click(function () {
                yoloWrapper[i].classList.remove("active-yoloWrapper");
            });
        });
    }
});
