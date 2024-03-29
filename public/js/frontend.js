$(function() {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });
    var alamat = "/api/artikel";

    // Get LATEST POST
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".latest-data").append(
                    `
                    <div class="entry__img-holder post-list__img-holder">
                        <a href="posts/${value.slug}">
                            <div class="thumb-container">
                            <img src="../assets/img/artikel/${value.foto}" class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                        </div>

                        <div class="entry__body post-list__body">
                        <div class="entry__header">
                            <a href="/posts-kategori/${value.kategori.slug}"" class="entry__meta-category">${value.kategori.nama_kategori}</a>
                            <h2 class="entry__title">
                            <a href="posts/${value.slug}">${value.judul}</a>
                            </h2>
                            <ul class="entry__meta">
                            <li class="entry__meta-date">
                                ${value.created_at}
                            </li>
                            <li class="entry__meta-author">
                                by <a href="#">${value.user.name}</a>
                            </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten years. Modern POS hardware includes the cash till, bar-code readers...</p>
                        </div>
                    </div>
                    `
                );
            });
        }
    });

    // Get POPULAR POST
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function(berhasil) {
            // console.log(berhasil)
            $.each(berhasil.data, function(key, value) {
                $(".popular-data").append(
                    `
                    <li>
                    <article class="clearfix">
                        <div class="widget-popular-posts__img-holder">
                            <div class="thumb-container">
                            <a href="/posts/${value.slug}">
                                <img src="../assets/img/artikel/${value.foto}" alt="" style="height:45px;" class="lazyload">
                            </a>
                            </div>
                        </div>
                        <div class="widget-popular-posts__entry">
                            <h3 class="widget-popular-posts__entry-title">
                            <a href="/posts/${value.slug}">${value.judul}</a>
                            </h3>
                        </div>                      
                    </article>
                    </li>
                    `
                );
            });
        }
    });

    // Get SOCIAL BUTTONS
    $.ajax({
        url: alamat,
        method: "GET",
        dataType: "json",
        success: function() {
            // console.log(berhasil)
            $(".social").append(
                `
                    <li>
                    <a class="social-facebook" href="https://web.facebook.com/nonocheese" title="facebook" target="_blank">
                        <i class="ui-facebook"></i>
                        <span class="socials__text">Facebook</span>
                    </a>
                    </li>
                    <li>
                    <a class="social-twitter" href="https://twitter.com/Hairoken" title="twitter" target="_blank">
                        <i class="ui-twitter"></i>
                        <span class="socials__text">Twitter</span>
                    </a>
                    </li>
                    <li>
                    <a class="social-instagram" href="https://www.instagram.com/hairoken/" title="instagram" target="_blank">
                        <i class="ui-instagram"></i>
                        <span class="socials__text">Instagram</span>
                    </a>
                    </li>
                    `
            );
        }
    });
});
