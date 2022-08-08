<style>
	/* WOOCOMMERCE PRODUCT */
	.mobile{ display: none; }
	.desktop{ display: block; }

	.alert_info {
		background: #ededed;
		color: #666;
	}
	.alert_info .alert_icon {
		background: #ccc;
	}

	.section_wrapper{ max-width: 100%; }
	.woocommerce div.product {
		margin-bottom: 0;
		position: relative;
		margin-top: 50px;
		display: block;
	}

	.woocommerce div.product div.summary {
		margin: 0;
		float: left;
		padding: 0 40px; position: relative;
	}
	.woocommerce .product div.entry-summary h1.product_title {
		font-size: 28px;
		line-height: 40px;
		margin-bottom: 15px;
		padding-bottom: 15px;
		position: relative;
		letter-spacing: 3px;
		text-transform: uppercase;
	}
	input[type="date"], input[type="email"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="url"], select, textarea, .woocommerce .quantity input.qty, .dark input[type="email"], .dark input[type="password"], .dark input[type="tel"], .dark input[type="text"], .dark select, .dark textarea {
		color: #626262;
		background-color: rgba(255,255,255,1);
		border-color: #EBEBEB;
		font-size: 12px;
		letter-spacing: 1px;
		margin: 0;
		box-shadow: none;
		line-height: 1.3;
		padding: 5px 8px !important;
	}
	.chart_box .chart .num, .counter .desc_wrapper .number-wrapper, .how_it_works .image .number, .pricing-box .plan-header .price, .quick_fact .number-wrapper, .woocommerce .product div.entry-summary .price {
		font-family: 'Futura' !important;
	}
	.woocommerce .product div.entry-summary .price {
    font-size: 23px !important;
    line-height: 30px;
    letter-spacing: 2px;
    padding: 20px !important;
    border-radius: 8px;
    position: relative;
    bottom: 0;
    right: 0;
    margin-bottom: 0px !important;
    display: flex;
    background: #f7f7f7 !important;
}

	.woocommerce .product.no-share .product_wrapper, .woocommerce .product.share-simple .product_wrapper {
		padding-left: 0;
		padding-bottom: 40px;
		display: flex;
	}

	.descriptioncont h4{
		clear:both;
		margin-top: 1em;
	}
	.woocommerce .mfn-variations-wrapper {
		display: none;
	}
	.woocommerce .variations_form .variations { background: transparent; }
	.woocommerce div.product form.cart .variations select { margin-right: 0; }
	.variations select {
		float: right;
		padding: 10px 8px !important;
		width: 100%; cursor: pointer;
	}
	.woocommerce div.product form.cart .variations label {
		font-weight: 700;
		font-size: 12px;
	}
	label, legend {
		font-size: 12px;
	}
	#review_form label {
		font-size: 12px !important;
	}

	.woocommerce ul.products li.product .price p{ display: none; }
.product-item{ cursor: pointer; }
.product-title{ font-family: 'Futura' !important; font-size: 14px !important; text-transform: uppercase; font-weight: 600; }
.product-excerpt {
    font-family: 'Futura Light' !important;
    font-size: 13px !important;
    font-weight: 300 !important;
    letter-spacing: 1px !important;
    line-height: 1.4 !important;
    height: 80px !important;
    text-align: justify !important;
}
.woocommerce ul.products li.product h4, .woocommerce-page ul.products li.product h4 {
    margin-bottom: 0;
    line-height: 1.6;
}
.product-price{ font-family: 'Futura Light' !important; font-size: 14px !important; text-transform: uppercase !important; font-weight: 600; }
.woocommerce ul.products li.product a {
    text-decoration: none;
    font-family: 'Futura' !important;
    font-size: 9px !important;
    text-transform: uppercase;
    font-weight: 600;
}

	.woocommerce div.product div.images .flex-control-thumbs {
		display: flex;
		flex-wrap: wrap;
		width: 100%;
		justify-content: center;
	}

	.woocommerce div.product div.images .flex-control-thumbs li {
		margin: 6px 3px !important;
	}

.woocommerce ul.products li.product .desc {
    background: #fff;
    padding: 10px 10px 10px;
    text-align: left;
}

.woocommerce ul.products li.product .desc .precio-descuento{
    text-decoration: line-through;
    color: #8e8e8e;
    display: inline-block;
    float: left;
    font-size: 10px;
    margin: 0 10px 0 0;
}
.woocommerce ul.products li.product .desc .precio{
    color: #222;
    display: inline-block;
    float: left;
    font-size: 10px;
    margin: 0 10px 0 0;
}
.up-sells span.price {
    position: relative;
    float: left !important;
    bottom: 0;
    right: 0;
    margin-bottom: 12px;
    display: flex;
    padding: 0;
    background: transparent;
}
.up-sells h2 {
    font-size: 16px !important;
    line-height: 26px !important;
    font-weight: 300 !important;
    letter-spacing: 1px !important;
}
.woocommerce .product .upsells.products ul {
    margin-bottom: 0;
    margin-top: 20px !important;
}
.woocommerce ul.products li.product .excerpt, .woocommerce-page ul.products li.product .excerpt {
    margin: 10px 0;
    font-family: 'Futura Light' !important;
    font-size: 14px !important;
    font-weight: 300 !important;
    letter-spacing: 1px !important;
    line-height: 1.4 !important;
    text-align: justify !important;
}
.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price {
    margin-bottom: 0;
    font-family: 'Futura Light' !important;
    font-size: 9px !important;
    text-transform: uppercase !important;
    font-weight: 600;
}
.woocommerce.single-product.mfn-variable-swatches .variations {
    display: table;
}
	.pielimg {
		width: auto !important;
		height: 20vh;
	}
	.badge-reclinable {
		width: 60px;
		right: 40px;
		top: 0px;
		position: absolute;
		font-weight: 100;
		padding: 6px 6px 3px 6px;
	}
	.badge-exclusivo-online {
		width: 90px;
		right: 40px;
		top: 10px;
		position: absolute;
		font-weight: 100;
		padding: 6px 6px 3px 6px;
	}

	#select-pieles-icon{
		height: 30px;
		position: absolute;
		margin: 4px 0 0 0; cursor: pointer; overflow: hidden;
	}
	#select-pieles-icon img{
		height: 100%;
	}
	.pricecont{
		margin-top: 1em;
	}

	.quantity{
		float: right;
		right: 0 !important;
		max-width: 50px !important;
		padding: 2px !important;
	}

	.comprarbtn {
		color: white;
		background: #1e1e1e;
		width: 100%;
		clear: both;
		text-align: center;
		padding: 14px 0 14px 0;
		font-size: 1em;
		font-weight: bold;
		letter-spacing: 2px; transition: linear 1s;
	}

	.comprarbtn:hover {
    cursor: pointer;
    color: #fff;
}

	.single-product .product .single_add_to_cart_button.button {
		color: white !important;
		background: #1e1e1e !important;
		width: 100% !important;
		clear: both !important;
		text-align: center !important;
		padding: 14px 0 14px 0 !important;
		font-size: 1em !important;
		font-weight: bold !important;
	}

	.variations tr:first-child td {
		box-shadow: none;
		border: none;
		padding: 0;
	}
	.variations label, legend {
		display: block;
		margin-bottom: 0;
		font-weight: 700;
		text-align: left;
		font-size: 12px;
	}
.woocommerce div.product form.cart .reset_variations { float: right; }
	input[type="date"], input[type="email"], input[type="number"], input[type="password"], input[type="search"], input[type="tel"], input[type="text"], input[type="url"], select, textarea, .woocommerce .quantity input.qty, .dark input[type="email"], .dark input[type="password"], .dark input[type="tel"], .dark input[type="text"], .dark select, .dark textarea {
		color: #626262;
		background-color: rgba(255,255,255,1);
		border-color: #EBEBEB;
		font-size: 12px;
		letter-spacing: 1px;
		margin: 0; box-shadow: none;
	}

	.moduloslink {
		position: relative;
		margin: auto;
		color: #5a5a5a;
		width: 100%;
		text-align: center;
		padding: 10px 0 10px 0;
		font-weight: bold;
		border: solid 1px #ededed;
		letter-spacing: 2px;
		transition: linear 0.3s;
		margin: 6px 0 8px 0;
	}

	.moduloslink a{
		border: none !important;
		width: inherit !important;
		padding: 0 !important;
		font-size: inherit !important;
		font-weight: inherit !important;
	}

	.moduloslink:hover {
		cursor: pointer;
		color: #333;
		background: #fff;
		opacity: 0.7;
	}
	.woocommerce .product.no-share .product_wrapper, .woocommerce .product.share-simple .product_wrapper {
		padding-left: 0;
		padding-bottom: 40px;
		display: flex;
	}

	.summary{
		margin-top: 1.5em;
	}
	.woocommerce #reviews #comments ol.commentlist li .comment-text p.meta {
		font-size: .83em;
		display: inline-block;
		margin-top: 10px;
		border-bottom: solid 1px #ededed;
		padding: 0 0 12px 0;
	}
	.woocommerce .star-rating {
		float: left;
		overflow: hidden;
		position: relative;
		height: 1em;
		line-height: 1;
		font-size: 14px;
		font-family: star;
		letter-spacing: 2px;     width: 85px !important;
	}
	.woocommerce .star-rating a{
		display: inline-block; cursor: pointer;
		float: left; position: absolute; z-index: 99;
		margin: 0 0 0 100px;
		font-family: 'Futura Light';
	}
	.woocommerce .comment-form-rating {
		display: block;
		align-items: center;
		margin-bottom: 15px;
	}
	#respond label {
		margin-bottom: 3px;
		margin: 6px 0 6px 0 !important;
		background: transparent;
		padding: 0px 0px !important;
		border-radius: 0;
	}
	.woocommerce .comment-form-rating p.stars > span {
		display: block;
		font-size: 12px;
	}
	.woocommerce .comment-form-rating p.stars a {
		flex: none;
		width: auto;
		height: auto;
		color: inherit;
		padding: 5px 10px;
		margin: 0 0px;
		font-size: 12px;
		background-color: transparent;
		border-radius: 5px;
		text-align: center;
		text-indent: 0;
		display: inline-block;
	}
	.woocommerce .comment-form-rating p.stars a:before {
		display: block;
		position: static;
		font-size: 18px;
		margin: 0 auto 10px;
		transition: all 0.3s ease-in-out 0s;
	}


	.shop-filters .woocommerce-ordering select {
		margin-bottom: 0;
		padding: 12px !important;
	}
	input[type="date"]:focus, input[type="email"]:focus, input[type="number"]:focus, input[type="password"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="text"]:focus, input[type="url"]:focus, select:focus, textarea:focus {
		color: #5c5c5c;
		background-color: #fff;
		border-color: #ddd;
	}
	.iconscontainer {
		clear: both;
		margin-top: 1em;
		width: 100%;
		margin: 0;
		padding: 0;
		display: flex;
		float: right; margin: 0 0 20px 0;
	}

	.iconscontainer .iconbtn {
		width: 33%;
		margin-left: 0;
		display: block;
		float: left;
		text-align: center;
		padding: 0 12px;
		font-size: 10px;
		letter-spacing: 2px;
		font-weight: 900;
	}

	.iconscontainer .iconbtn img {
		width: 40px !important;
		margin: auto;
		vertical-align: middle;
		padding: 12px;
	}

	.iconscontainer .iconbtn:nth-child(2n) {
		border-right: solid 1px #ededed;
		border-left: solid 1px #ededed;
	}

	.iconscontainer .iconbtn:hover{
		cursor:pointer;
		opacity: 0.8;
	}

	.linkedin{
		display: none;
	}

	.background-topbox{
		position:fixed;
		background: rgba(0,0,0,0.5);
		width: 100vw;
		height: 100vh;
		top: 0;
		left: 0;
		z-index: 999;
	}

	.topbox-container{
		position: relative;
		margin: auto;
		background: white;
		width: 80%;
		height: 80vh;
		top: 10vh;
	}

	.topbox-close{
		position: absolute;
		right: 0.5em;
		top: 0.5em;
		font-size:2em;
		z-index:750;
	}

	.topbox-close:hover{
		cursor: pointer;
		opacity: 0.8;
	}

	.topbox-header {
		width: 100%;
		height: 1em;
		font-size: 2em;
		color: black;
		background: rgb(244,244,244);
		text-align: center;
		padding: 24px 0;
	}

	.topbox-title {
		vertical-align: middle;
		font-size: 18px;
		letter-spacing: 4px;
	}

	.topbox-content{
		width:80%;
		height: 65%;
		padding:3% 10% 5% 10%;
		overflow-x: hidden;
	  overflow-y: scroll;
	}

	.topbox-content ul {
		list-style-type: disc;
		margin: 0 0 18px 40px;
		line-height: 1.8;
	}

	.catpiel{
		float: left;
	  width: 100%;
	  display: flow-root;
		position: relative;
		padding-bottom: 8em;
	}

	.titulocat{
		text-transform: uppercase;
		display: block;
		margin-bottom: 0.1em;
	}
	.topbox-content .preciocat {
		position: absolute;
		float: right;
		bottom: 0;
		right: 0;
		margin-bottom: 12px;
		display: flex;
		padding: 0;
		background: #f7f7f7;
	}
	.preciocat {
    position: relative;
    float: right;
    bottom: 0;
    right: 0;
    margin-bottom: 12px !important;
    display: flex;
    margin: 0;
    background: #f7f7f7;
}
#ajaxspace .preciocat {
	position: relative;
	float: right;
	bottom: 0;
	right: 0;
	margin-bottom: 12px !important;
	display: flex;
	padding: 0px;
	margin: 0;
	background: #f7f7f7;
}
.preciocat .precio-descuento {
	text-decoration: line-through;
	font-size: 16px;
	margin: 0 20px 0 0;
	color: #9c9c9c;
}
.preciocat .precio {
	font-size: 21px;
	font-weight: 600;
}
	.subcatpiel{
		float: left; width: 100%;
	}

	span.price {
    position: relative;
    float: right!important;
    bottom: 0;
    right: 0;
    margin-bottom: 12px;
    display: flex;
    padding: 18px;
    background: transparent !important;
    margin: 0 !important;
    line-height: 1;
    font-size: 12px !important;
}

	.contpiel {
		text-align: center;
		float: left;
		margin: 4px;
		width: calc(25% - 8px);
	}
	.contpiel p{ margin: 0 !important; }
	.contpiel:hover{
		cursor: pointer;
		opacity: 0.8;
	}

	#ajaxspace{
		position: relative;
		margin-top: 12px;
		display: none;
	}
	.price p{display: none; }

	#modulos{
		display: none;
	}


	#modulos-extra-relacionados {
		width: 1240px;
		margin: 0 auto;
	}
	#modulos-extra-relacionados .products{
		display: flex;
		margin: 0 auto;
		flex-wrap: wrap;
	}
	#modulos-extra-relacionados .woocommerce ul.products li.product .desc {
		background: #fff;
		padding: 10px;
		text-align: left;
		height: 55px;
	}
	#modulos-extra-relacionados .products .price{
		float: left !important;
		padding: 0;
	}
	#modulos-extra-relacionados .woocommerce ul.products li.product .desc h5 {
		font-size: 9px;
		line-height: 25px;
		font-weight: 400;
		letter-spacing: 1px;
		text-transform: uppercase;
		color: #888 !important;
		line-height: 1.3;
		margin: 0 !important;
	}
	.atributo_modulo_composicion{ text-transform: uppercase; }

	.modulos-topbox .topbox-content {
    width: 90%;
    height: 65%;
    padding: 60px 5% 60px 5%;
    overflow-x: hidden;
    overflow-y: scroll;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    column-gap: 10px;
    row-gap: 10px;
}
	.modulo-topbox {
    position: relative;
    padding: 10px;
    float: left;
    border: #ededed 1px solid;
    height: auto;
}

.modulo-topbox h3 {
    font-size: 9px;
    line-height: 32px;
    font-weight: 600;
    letter-spacing: 1px;
    text-align: left;
    margin: 10px 0 6px 0;
    line-height: 1.4;
    height: auto;
    text-transform: uppercase;
    color: #666;
    height: 26px;
}
	.modulo-topbox img{
    width: calc(100% - 10px) !important;
}

.modulo-topbox select {
    border: solid 1px #ddd;
    bottom: 20px;
    width: 1;
    text-transform: uppercase;
    font-size: 9px;
    letter-spacing: 1px;
}
.woocommerce div.product p.price, .woocommerce div.product span.price {
	color: #3a3a3a;
	font-size: 1.25em;
}
	.modulo-topbox .select-items {
		text-transform: uppercase;
	}

	.descripcion-topbox, .politicas-topbox, .seleccionar-topbox, .modulos-topbox {
		visibility: hidden;
	}

	.descriptioncont{
		margin: 6px 0 21px 0;
	}

	.woocommerce .product .related.products, .woocommerce .product .upsells.products {
		clear: both;
		border-top-width: 0;
		border-style: solid;
		padding-top: 40px;
		margin-top: 40px;
		width: 100%;
		margin: 0 auto; width: 1240px;
	}
	.woocommerce span.onsale, .shop_slider .shop_slider_ul li .item_wrapper span.onsale {
		border-top-color: #5b5b53 !important;
		display: none;
	}

	table th, table th .product-price {
		font-weight: 700;
		background: #f9f9f9;
		box-shadow: none;
		text-transform: uppercase;
		letter-spacing: 3px;
		font-size: 12px !important;
		font-family: 'Futura';
	}
	.container-cat-piel {
		padding: 40px 20px;
		background-color: rgb(0,0,0,0.2);
		text-align: center;
	}
	.button-stroke .button, .button-stroke button, .button-stroke .action_button, .button-stroke .footer_button, .button-stroke input[type="button"], .button-stroke input[type="reset"], .button-stroke input[type="submit"] {
		background-color: transparent;
		border-width: 0;
		border-style: solid;
		border-radius: 3px;
		transition: background-color .2s ease-in-out, color .2s ease-in-out;
	}
	#ayuda-compra{
			border-top: 1px solid rgba(0,0,0,.08);
		padding: 12px 0 0 0;
		text-align: left;
		width: 50%;
		float: left;
		margin: 12px 0 !important;
	}
	.share-simple-wrapper {
		border-top: 1px solid rgba(0,0,0,.08);
		padding: 12px 0 0 0;
		width: 50%;
		float: left;
		text-align: right;
		margin: 12px 0 !important;
	}
	.woocommerce .product .related.products h2{ display: none; }
	#explora-espacio{ padding: 40px 0 40px 0; border-top: 1px solid rgba(0,0,0,.08); max-width: 1240px; margin: 0 auto; }

	.woocommerce .product .related.products ul, .woocommerce .product .upsells.products ul {
		margin-bottom: 0;
		margin-top: 40px;
	}
	.woocommerce .products.upsells.up-sells ul.products li.product {
		width: calc(25% - 2%);
		margin: 0 1% 20px;
		clear: none;
	}

	#reviews-wrapper{ padding: 40px 0 40px 0; border-top: 1px solid rgba(0,0,0,.08); max-width: 1240px; margin: 0 auto; }

	.woocommerce div.product div.images .flex-control-thumbs li {
		width: 12.5%;
		float: left;
		margin: 0;
		list-style: none;
	}

	.woocommerce-Reviews-title{
		display: none;
	}
	#review_form_wrapper{
		background: #f7f7f7;
		padding: 25px;
		border-radius: 10px;
	}
	.woocommerce #reviews #comments ol.commentlist li {
		margin: 0px 0 25px;
	}
	#respond .comment-reply-title {
		font-size: 14px;
		line-height: 20px;
		font-weight: 600;
		padding: 0 0 12px 0;
		display: block;
		border-bottom: solid 1px #ddd;
		margin: 0 0 16px 0;
	}
	#respond label {
		margin-bottom: 3px;
		margin: 6px 0 12px 0 !important;
		background: transparent;
		padding: 0px 0px !important;
		border-radius: 0;
	}
	.comment-notes{
		font-size: 13px;
		color: #999;
	}
	#respond input[type="text"], #respond input[type="password"], #respond input[type="email"], #respond select {
		width: 100%;
		padding: 10px 10px !important;
	}

	.woocommerce #review_form #respond .form-submit input {
		left: auto;
		text-transform: uppercase;
		letter-spacing: 2px;
		font-weight: 600;
		padding: 10px 46px; border-radius: 0;
	}

	label, legend {
		font-size: 12px;
	}
	.woocommerce p.stars a {
		font-size: 18px;
	}
	ins{
		text-decoration: none;
	}
	.desde{
		margin: 4px 3px 0 0;
		display: inline-block;
		float: left;
		line-height: 1;
		text-transform: uppercase;
		font-size: 9px; font-weight: 600;
	}
	.numdescuento {
	    margin-top: 3px;
	    float: left;
	    background: #dc2727;
	    width: 45px;
	    height: 45px;
	    border-radius: 50%;
	    right: 345px;
	    z-index: 1;
	    float: left;
	}
.numdescuento p {
    margin: 0 !important;
    padding: 3px 0px 6px 6px;
    color: #fff;
    font-weight: 900;
    font-size: 14px;
    line-height: 2.9;
}

.numdescuento-adicional {
    background: transparent;
    width: auto;
    margin: 10px 0 0 10px;
    display: inline-block;
}
.numdescuento-adicional p {
    margin: 0 !important;
    padding: 0;
    color: #dc2727;
    font-weight: 900;
    font-size: 12px;
    line-height: 2.9;
}
.numdescuento-adicional p span{
    font-size: 9px !important;
}

.woocommerce-variation-availability {
    width: 255px !important;
    margin: 55px 0px 0 0;
    left: 40px;
    position: absolute;
}
.products .numdescuento {
	position: absolute;
	bottom: 20px;
	right: 10px;
	background: #dc2727;
	width: 48px;
	height: 48px;
	border-radius: 50%;
}
.products .numdescuento p {
	margin: 0 !important;
	padding: 8px 4px 6px 10px;
	color: #fff;
	font-weight: 900;
	font-size: 12px;
	line-height: 2.9;
}

.moduloname{
    margin: 0;
    font-size: 12px;
    text-align: left;
}


	@media only screen and (max-width: 768px) {

		.mobile{ display: block; }
		.desktop{ display: none; }

		.woocommerce div.product {
			margin-top: 20px;
   			 padding: 0px 20px;
		}
		.woocommerce div.product div.summary {
			margin: 25px 0 0 0;
			float: left;
			padding: 0 0px; position: relative;
		}
		.variations tr { display: grid; }
		.variations td:first-child{ width: 40%; }
		.variations select {
			float: right;
			padding: 10px 8px!important;
			width: 100%;
			cursor: pointer;
		}
		.woocommerce div.product form.cart .variations label {
		    font-weight: 700;
		    font-size: 12px;
		    margin: 0 0 0 2px;
		}
		#select-pieles-icon {
	    height: 30px;
	    position: absolute;
	    margin: 4px -40px 0 0;
	    cursor: pointer;
	    width: 50px;
	    overflow: hidden;
	}
		.woocommerce .product.no-share .product_wrapper, .woocommerce .product.share-simple .product_wrapper { display: block; }
		.woocommerce .variations_form .variations td.value .reset_variations {
			float: right;
		}
		.woocommerce div.product p.stock {
			font-size: .92em;
			display: none;
		}
		.woocommerce .product div.entry-summary .price {
	    float: none;
	    font-size: 21px !important;
	    line-height: 30px;
	    letter-spacing: 2px;
	    padding: 0 0 10px 0px;
	    margin: 0 !important;
	    border-radius: 8px;
	}
		#ayuda-compra, .share-simple-wrapper {
			width: 100%;
		}
		.topbox-container {
			position: relative;
			margin: auto;
			background: #fff;
			width: 90%;
			height: 80vh;
			top: 10vh;
		}
		.catpiel {
			float: left;
			width: 100%;
			display: flow-root;
			position: relative;
			padding-bottom: 6em !important;
			margin: 12px 0;
		}
		.topbox-close {
			position: absolute;
			right: 0px;
			top: 5px;
			font-size: 2em;
			z-index: 750;
		}
		.topbox-title {
			vertical-align: middle;
			font-size: 14px;
			letter-spacing: 4px;
		}
		.topbox-header {
			width: calc(100% - 60px);
			height: auto;
			color: #000;
			background: #f4f4f4;
			text-align: left;
			padding: 40px 30px 20px;
		}
		.topbox-content {
			width: calc(100% - 40px);
			height: 70%;
			padding: 20px 20px;
			overflow-x: hidden;
			overflow-y: scroll;
		}
		.catpiel {
			float: left;
			width: 100%;
			display: flow-root;
			position: relative;
			padding-bottom: 8em;
			margin: 12px 0;
		}
		.subcatpiel {
			float: left;
			margin: 14px 0;
		}
		.subcatpiel>p {
			margin: 10px 0 20px;
			font-size: 11px;
			width: 100%;
			font-weight: 400;
		}
		.pielimg {
			width: auto !important;
			height: auto;
		}

		.topbox-content .preciocat { width: 42%; }

		.summary span.price {
			position: relative;
			float: right!important;
			bottom: 0;
			right: 0;
			margin-bottom: 0;
			display: flex;
			padding: 10px 10px 5px 10px;
			background: transparent !important;
		}
		.preciocat {
		    width: calc(100% - 25px);
		    position: relative;
		    float: right;
		    bottom: 0;
		    right: 0;
		    margin-bottom: 12px !important;
		    display: block;
		    padding: 20px 12px;
		    margin: 0;
		    background: #f7f7f7;
		    text-align: right;
		}
		.preciocat .woocommerce-Price-amount {
			margin: 0 8px;
		}
		.price p {
			display: none !important;
		}

		#modulos-extra-relacionados {
			width: 100%;
    	display: flow-root;
		}
		#modulos-extra-relacionados h3{
		    margin-top: 20px;
		}
		#modulos-extra-relacionados .products_wrapper ul.products li.product {
		    width: 100%;
		}
		#modulos-extra-relacionados .woocommerce ul.products li.product .desc h4{
	    margin-bottom: 0px;
		  margin-top: 0px;
		}
		.preciocat .precio-descuento {
	    text-decoration: line-through;
	    font-size: 14px;
	    margin: 0 0 0 0;
	    color: #9c9c9c;
	}
	.preciocat .precio {
    font-size: 18px;
    font-weight: 600;
}
		.numdescuento {
		    position: absolute;
		    margin-top: -2px;
		    float: right;
		    background: #dc2727;
		    width: 45px;
		    height: 45px;
		    border-radius: 50%;
		    left: 0;
		    z-index: 1;
		}
		.numdescuento-adicional {
    background: transparent;
    width: auto;
    margin: 5px 0 15px 55px;
    display: inline-block;
}
		.products .numdescuento {
		    position: absolute;
		    margin-top: -2px;
		    float: right;
		    background: #dc2727;
		    width: 48px;
		    height: 48px;
		    border-radius: 50%;
		    right: 12px;
		    z-index: 1; left: auto;
		    bottom: 10px;
		}
		.moduloname{
		    margin: 0;
		    font-size: 12px;
		    text-align: left;
		}

	}
</style>

<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;
global $post;
$product = wc_get_product( $post->ID );


global $wpdb;
$query = $wpdb->prepare("SELECT * FROM wp3h_cantidad_productos_en_agrupados");
$result = $wpdb->get_results ($query);
$productos_agrupados = array();

foreach($result as $row){
	$productos_agrupados_info = [$row->id_producto_agrupado, $row->id_producto_hijo, $row->cantidad];
	array_push($productos_agrupados, $productos_agrupados_info);
}

//$data = json_encode($productos_agrupados);
//$datacantidadbox = $data;

//var_dump($productos_agrupados);

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

// prev & next post -------------------

$single_post_nav = array(
	'hide-header'	=> false,
	'hide-sticky'	=> false,
);

$opts_single_post_nav = mfn_opts_get( 'prev-next-nav' );
if( is_array( $opts_single_post_nav ) ){

	if( isset( $opts_single_post_nav['hide-header'] ) ){
		$single_post_nav['hide-header'] = true;
	}
	if( isset( $opts_single_post_nav['hide-sticky'] ) ){
		$single_post_nav['hide-sticky'] = true;
	}

}

$post_prev 		= get_adjacent_post( false, '', true );
$post_next 		= get_adjacent_post( false, '', false );
$shop_page_id = wc_get_page_id( 'shop' );


// post classes -----------------------

$classes = array();

if( mfn_opts_get( 'share' ) == 'hide-mobile' ){
	$classes[] = 'no-share-mobile';
} elseif( ! mfn_opts_get( 'share' ) ) {
	$classes[] = 'no-share';
}

if( mfn_opts_get( 'share-style' ) ){
	$classes[] = 'share-'. mfn_opts_get( 'share-style' );
}

$single_product_style = mfn_opts_get( 'shop-product-style' );
$classes[] = $single_product_style;


// translate
$translate['all'] = mfn_opts_get( 'translate' ) ? mfn_opts_get( 'translate-all', 'Show all' ) : __( 'Show all', 'betheme' );


//PRECIO MÁS BAJO
$minprice;
$minpricesetted = false;

?>

<!-- TOPBOXES -->

<!-- DESCRIPCION LARGA -->
<div class="background-topbox descripcion-topbox">
	<div class="topbox-container">
		<div class="topbox-close">
			<? echo do_shortcode( '[icon type="icon-cancel-fine" color="#888"]'); ?>
		</div>
		<div class="topbox-header">
			<span class="topbox-title">DESCRIPCIÓN Y DETALLES</span>
		</div>
		<div class="topbox-content">
			<?php // echo $product->description; ?>
			<?php the_content(); ?>
		</div>
	</div>
</div>

<!-- POLÍTICAS DE COMPRA -->
<div class="background-topbox politicas-topbox">
	<div class="topbox-container">
		<div class="topbox-close">
			<? echo do_shortcode( '[icon type="icon-cancel-fine" color="#888"]'); ?>
		</div>
		<div class="topbox-header">
			<span class="topbox-title">POLÍTICAS DE COMPRA</span>
		</div>
		<div class="topbox-content">
			<ul>
				<li>Al realizar tu compra deberás aceptar los términos y condiciones presentes.</li>
				<li>El número de pedido que se asigna al realizar la transacción en la tienda en línea de Tutto Pelle no implica la aceptación de la misma. En caso de tener algún problema con tu pedido te será comunicado por correo electrónico o vía telefónica.</li>
				<li>Los productos de tu pedido están sujetos a disponibilidad. En caso de que exista un retraso en el envío de tu producto, te avisaremos oportunamente.</li>
				<li>El tiempo estimado de entrega máximo es de 120 días por lo general.</li>
				<li>En caso de haber un cambio en el período de entrega se te comunicará por correo electrónico o vía telefónica.</li>
				<li>Las imágenes utilizadas para la tienda en línea de Tutto Pelle, son ilustrativas y pueden tener algunas variaciones mínimas respecto al producto real.</li>
			</ul>
			<hr>
			<h4>MÉTODOS DE PAGO</h4>
			<ul>
				<li>Los métodos de pago permitidos son Tarjetas de crédito / débito, trasferencias electrónicas y depósitos bancarios así como por medio de una cuenta PayPal.</li>
				<li>Para compras a meses sin intereses se le pide al cliente revisar los detalles al realizar su pago.</li>
				<li>Serás contactado en las próximas 48 horas al número telefónico o vía correo electrónico que proporcionaste al hacer tu pago, para validar tu compra.</li>
				<li>Todos los pedidos tendrán un tiempo de entrega de 90 a 120 días, a partir de la confirmación de tu pago.
			<strong>Nota.</strong> TUTTO PELLE informará al cliente oportunamente si el tiempo de entrega de su pedido es menor al especificado anteriormente.</li>
				<li>Cuando tu pedido esté listo, recibirás un correo en el que se te informará los detalles del envío. Y uno adicional con un Pedido de Venta</li>
				<li>El tiempo de entrega del pedido podría variar dependiendo de la zona geográfica donde te encuentres. Tutto Pelle mantendrá contacto hasta que la entrega sea realizada.</li>
				<li>El producto será enviado al domicilio que especificaste al hacer tu compra. Este destino deberá contar con los accesos y espacios adecuados, de forma que se evite poner en riesgo al personal o al mismo producto.</li>
				<li>Te recordamos que tu pedido será entregado por personal calificado solo hasta la puerta del domicilio especificado y que el servicio no incluye movimientos especiales, ni acomodos específicos. Cualquier movimiento Volado o acceso del producto a una casa o departamento es responsabilidad del cliente. Por lo tanto es importante verificar las medidas de tu espacio y accesos.</li>
			</ul>
			<hr>
			<h4>FACTURACIÓN</h4>
			<ul>
				<li>El cliente contará con 24 horas a partir de la emisión de su factura para realizar cualquier aclaración acerca de la misma. Tu factura será emitida y se te hará llegar una copia al correo que registraste en el proceso de compra una vez que se haya hecho la entrega de tu pedido.</li>
			</ul>

		</div>
	</div>
</div>


<!-- CATEGORÍAS Y PIEL de Single product variable-->

<?php if ( $product->is_type( 'variable' ) ){ ?>

<div class="background-topbox seleccionar-topbox">
	<div class="topbox-container">
		<div class="topbox-close">
			<? echo do_shortcode( '[icon type="icon-cancel-fine" color="#888"]'); ?>
		</div>

		<div class="topbox-header">
			<span class="topbox-title">SELECCIONAR CATEGORÍA Y PIEL</span>
		</div>

		<div class="topbox-content">
			<?php

				$categoriaspieles = array();

				foreach( $product->get_variation_attributes() as $taxonomy => $terms_slug ){
				    // To get the attribute label (in WooCommerce 3+)

				    $variationsarray = $product->get_available_variations();
						//var_dump($variationsarray);

				    foreach($terms_slug as $term){

								//var_dump($term);

				        // Getting the term object from the slug
				        $term_obj  = get_term_by('slug', $term, $taxonomy);

				        $term_id   = $term_obj->term_id; // The ID
				        $term_name = $term_obj->name; // The Name
				        $term_slug = $term_obj->slug; // The Slug
				        $term_description = $term_obj->description; // The Description

				        $precio;
						$regular_price;
				        //Buscamos el precio

				        foreach ($variationsarray as $varacion) {
				        	if ($varacion['attributes']['attribute_'.$taxonomy] == $term_slug ){
								$id = $varacion['variation_id'];
								$variacionobj = new WC_Product_Variation($id);
				        		$precio = $variacionobj->get_sale_price();
								$regular_price = $variacionobj->get_regular_price();
				        	}
									//var_dump($varacion);
				        }
						
						//var_dump($regular_price.$key);

				        //Separamos el slug para comparaciones de organizacion del array de pieles
				        $arrayslug = explode("-", $term_slug);

						if ($regular_price > $precio){

				        	$piel = array(
					        		"term_id" => $term_id,
					        		"piel" => $arrayslug[1],
					        		"descripcion" => $term_description,
					        		'name' => $term_name,
					            'slug' => $term_slug,
					            'precio' => $precio,
					            'precio_completo' => $regular_price
				            	);
				        }else{
				        	$piel = array(
					        		"term_id" => $term_id,
					        		"piel" => $arrayslug[1],
					        		"descripcion" => $term_description,
					        		'name' => $term_name,
					            'slug' => $term_slug,
					            'precio' => $precio
				            	);
				        }
						
				        // OBJETO con el array de info de la piel en específico

				        if ($minpricesetted == false){
				        	$minprice = $precio;
				        	$minpricesetted = true;
				        }

				        //Rellenamos el array checando si existe categoría y subcategoría para organizar
				        if (array_key_exists($arrayslug[0], $categoriaspieles)){

				        	if (array_key_exists($arrayslug[2], $categoriaspieles[$arrayslug[0]])){

				        		array_push($categoriaspieles[$arrayslug[0]][$arrayslug[2]], $piel);

				        	}else{

				        		$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				        	}

				        }else{
				        	$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				        }
				    }
				}

			ksort($categoriaspieles);
			foreach ($categoriaspieles as $categoria) {

				$catkey = array_search ($categoria, $categoriaspieles);
				echo "<div class='catpiel'><h3 class='titulocat'>".$catkey."</h3>";

				//var_dump($categoria);

				foreach ($categoria as $subcategoria) {
					$key = array_search ($subcategoria, $categoria);

					//$subcatnum = count($categoria);
					//var_dump($subcategoria);
					//echo($subcategoria[0]['precio_completo']);

					echo "<div class='subcatpiel'><h4>".$key."</h4>";
					echo "<p>".$subcategoria[0]['descripcion']."</p>";

					foreach ($subcategoria as $lapiel) {
						$imgurl = z_taxonomy_image_url($lapiel['term_id']);
					?>
						<div class="contpiel" onClick=select_piel(<?php echo "'".$lapiel['slug']."'"; ?>)>
							<img class='pielimg' src=<?php echo '"'.$imgurl.'"'; ?> >
							<p><?php
							$nombrepiel = explode("/", $lapiel['name']);
							echo $nombrepiel[1]; ?>
							</p>
						</div>

					<?php
					}
					if($subcategoria[0]['precio_completo']){
						echo '<div class="preciocat">
							  <span class="price">
								<p style="font-size: 0.8em;">
								  PRECIO:
								</p>
								<del>
								  <span class="woocommerce-Price-amount amount">
									<bdi>
									  '. wc_price($subcategoria[0]['precio_completo']). '
									</bdi>
								  </span>
								</del>
								<ins>
								  <span class="woocommerce-Price-amount amount">
									<bdi>
									  '. wc_price($subcategoria[0]['precio']) . '
									</bdi>
								  </span>
								</ins>
							  </span>
							</div>' ;
						echo "</div>";
					}else{
						echo "<div class='preciocat c'>
							<span class='price'><label>PRECIO:</label>" . wc_price($subcategoria[0]['precio']) ."</span>
							</div>";
					echo "</div>";
					}
				}
				echo "</div><hr>";
			}

			?>
		</div>
	</div>
</div>


<!-- CATEGORÍAS Y PIEL de grouped product -->

<?php }

	else if ( $product->is_type( 'grouped' ) ){
?>

<div class="background-topbox seleccionar-topbox">
	<div class="topbox-container">
		<div class="topbox-close">
			<? echo do_shortcode( '[icon type="icon-cancel-fine" color="#888"]'); ?>
		</div>

		<div class="topbox-header">
			<span class="topbox-title">SELECCIONAR CATEGORÍA Y PIEL</span>
		</div>

		<div class="topbox-content">
			<?php

				$categoriaspieles = array();

				//$datacantidadbox = json_decode($json, true);
				$precios = array();
				$childrenx = $product->get_children();

				$product_child = wc_get_product( $product->children[0] );
				$sumarcantidad = array();

				foreach ($productos_agrupados as $datarow) {
						if ( $product->get_id() == $datarow[0] ) {
							array_push($sumarcantidad, $datarow);
						}
				}
				//var_dump($sumarcantidad);

				foreach( $product_child->get_variation_attributes() as $taxonomy => $terms_slug ){

				    foreach($terms_slug as $term){
				    	// Getting the term object from the slug
				        $term_obj  = get_term_by('slug', $term, $taxonomy);

				        $term_id   = $term_obj->term_id; // The ID
				        $term_name = $term_obj->name; // The Name
				        $term_slug = $term_obj->slug; // The Slug
				        $term_description = $term_obj->description; // The Description

				        $precio = 0;
				        $precio_completo = 0;

				        //Buscamos los precios y los sumamos por composición
				        foreach ($product->children as $moduloid) {

				        		$leproduct = wc_get_product( $moduloid );
						    	$tienepiel = $leproduct->get_attribute('pa_categoria-color');

						    	if ( ! empty( $tienepiel ) ){

					        	$losattributes = array(
					        		'attribute_pa_categoria-color' => $term_slug
					        	);

					        	$variacionid = find_matching_product_variation_id($moduloid, $losattributes);
					        	$variacionobj = new WC_Product_Variation($variacionid);
								
					        	if($variacionobj->get_price()){									
									$hijos_tb = array_column($productos_agrupados, 1);
									if(in_array($moduloid, $hijos_tb)){
										$indice = array_search($leproduct->get_id(), $hijos_tb);
										$precio += $variacionobj->get_sale_price()*$productos_agrupados[$indice][2];
										$precio_completo += $variacionobj->get_regular_price()*$productos_agrupados[$indice][2];
									}
									else{
										$precio += $variacionobj->get_price();
										$precio_completo += $variacionobj->get_regular_price();
									}
								}
					        }else{

								if ( $leproduct->is_type( 'variable' ) ){

      								$variations = $leproduct->get_available_variations();
							      	$variations_id = wp_list_pluck( $variations, 'variation_id' );
							      	$variation = wc_get_product( $variations_id[0] );

							      	if ( $variation->get_price() ){
							      		if ( $variation->get_sale_price() ){
							      			$precio += $variation->get_sale_price();
							            	$precio_completo += $variation->get_regular_price();
											//$precio_completo = 25;
							      		}else{
							      			$precio +=  $variation->get_price();
											//$precio = 25;
							      		}
							      	}
      							}else if ( $leproduct->is_type( 'simple' ) ){

      								if ( $leproduct->get_price() ){
							      		if ( $leproduct->get_sale_price() ){
							      			$precio += $leproduct->get_sale_price();
							            	$precio_completo +=  $leproduct->get_regular_price();
											//$precio = 25;
							      		}else{
							      			$precio +=  $leproduct->get_price();
											//$precio = 25;
							      		}
							      	}

      							}
				        	}
				        }

				        //Separamos el slug para comparaciones de organizacion del array de pieles
				        $arrayslug = explode("-", $term_slug);

				        // OBJETO con el array de info de la piel en específico
				        if ($precio_completo > $precio){
				        	$piel = array(
								"term_id" => $term_id,
								"piel" => $arrayslug[1],
								"descripcion" => $term_description,
								'name' => $term_name,
								'slug' => $term_slug,
								'precio' => $precio,
								'precio_completo' => $precio_completo
				            );
				        }else{
				        	$piel = array(
								"term_id" => $term_id,
								"piel" => $arrayslug[1],
								"descripcion" => $term_description,
								'name' => $term_name,
					            'slug' => $term_slug,
					            'precio' => $precio,
								//'precio_completo' => $precio_completo
				            );
				        }

				        if ($minpricesetted == false){
				        	$minprice = $precio;
				        	$minpricesetted = true;
				        }

				        //Rellenamos el array checando si existe categoría y subcategoría para organizar
				        if (array_key_exists($arrayslug[0], $categoriaspieles)){
				        	if (array_key_exists($arrayslug[2], $categoriaspieles[$arrayslug[0]])){
				        		array_push($categoriaspieles[$arrayslug[0]][$arrayslug[2]], $piel);
				        	}else{
				        		$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				        	}
				        }else{
				        	$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				        }
				    }
				}

			foreach ($categoriaspieles as $categoria) {

				$catkey = array_search ($categoria, $categoriaspieles);

				echo "<div class='catpiel'><h3 class='titulocat'>".$catkey."</h3>";

					foreach ($categoria as $subcategoria) {
						$key = array_search ($subcategoria, $categoria);

						//$subcatnum = count($categoria);

						echo "<div class='subcatpiel'><h4>".$key."</h4>";
						echo "<p>".$subcategoria[0]['descripcion']."</p>";

						foreach ($subcategoria as $lapiel) {
							$imgurl = z_taxonomy_image_url($lapiel['term_id']);
						?>
							<div class="contpiel" onClick=select_piel(<?php echo "'".$lapiel['slug']."'"; ?>)>
								<img class='pielimg' src=<?php echo '"'.$imgurl.'"'; ?> >
								<p><?php
								$nombrepiel = explode("/", $lapiel['name']);
								echo $nombrepiel[1]; ?>
								</p>
							</div>
						<?php
						}
						if ($subcategoria[0]['precio_completo']){ ?>
							<div class='preciocat a'>
							<span class="price"><label>PRECIO:</label>
								<del>
									<span class="woocommerce-Price-amount amount">
										<bdi>
											<span class="woocommerce-Price-currencySymbol">
												$
											</span>
											<?php echo number_format($subcategoria[0]['precio_completo']) . ".00"; ?>
										</bdi>
									</span>
								</del>
								<ins>
									<span class="woocommerce-Price-amount amount">
										<bdi>
											<span class="woocommerce-Price-currencySymbol">
												 $
											</span>
											<?php echo " ". number_format($subcategoria[0]['precio']) . ".00"; ?>
										</bdi>
									</span>
								</ins>
							</span>

						<?php 
						}else{ ?>
							<div class='preciocat b'>
								<span class="price"><label>PRECIO:</label>
									<del>
										<span class="woocommerce-Price-amount amount">
											<bdi>
												<span class="woocommerce-Price-currencySymbol">
													$
												</span>
												<?php echo number_format($subcategoria[0]['precio_completo']) . ".00"; ?>
											</bdi>
										</span>
									</del>
									<ins>
										<span class="woocommerce-Price-amount amount">
											<bdi>
												<span class="woocommerce-Price-currencySymbol">
													 $
												</span>
												<?php echo " ". number_format($subcategoria[0]['precio']) . ".00"; ?>
											</bdi>
										</span>
									</ins>
								</span>
						<?php 
						}
						echo "</div></div>";
					}
				echo "</div><hr>";
			}
			?>
		</div>
	</div>
</div>

<?php } ?>


<!-- Comienza producto -->

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( $classes, $product ); ?>>

	<?php
		// single post navigation | sticky
		if( ! $single_post_nav['hide-sticky'] ){
			echo mfn_post_navigation_sticky( $post_prev, 'prev', 'icon-left-open-big' );
			echo mfn_post_navigation_sticky( $post_next, 'next', 'icon-right-open-big' );
		}
	?>

	<?php
		// single post navigation | header
		if( ! $single_post_nav['hide-header'] ){
			echo mfn_post_navigation_header( $post_prev, $post_next, $shop_page_id, $translate );
		}
	?>

	<div class="product_wrapper">

		<div class="column one-second product_image_wrapper">
			<?php
				/**
				 * woocommerce_before_single_product_summary hook.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>

		<div class="summary entry-summary column one-second">
			<?php
				/**
				 * woocommerce_single_product_summary hook.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				//do_action( 'woocommerce_single_product_summary' );

				$title = get_the_title();
				$v = "-";
				$pos = strpos($title, $v);

				if ($pos === false) {
					?>
					<h1 style="margin: 0;"><?php echo $title; ?></h1>
				<?
				}
				else{
					$titleexp = explode(" ", $title);
					$removed = array_pop($titleexp);
					$titlefinal = implode(" ", $titleexp);
					?>
					<h1 style="margin: 0;"><?php echo $titlefinal; ?></h1>
				<?
				}
				?>
				<?php
				$p_cats = $product->get_categories();
				if ( str_contains($p_cats, 'electrico') ) {
					echo "<div class='badge-reclinable'><img src='https://tuttopelle.mx/wp-content/uploads/2022/03/Icono-reclinado-02-1.png' alt='Reclinable eléctrico'></div>";
				}
				?>
				<h6 style="text-transform: uppercase; display: inline-block; float: left; margin: 0 5px 0 0;">
					<?php
					$subtitulo = types_render_field( 'subtitulo', array( 'post_id' => $product_id, 'output' => 'raw') );
					if ($subtitulo != ""){
						echo $subtitulo . " / ";
					}
					?>
				</h6>

				<div class="desde-wrapper">
					<?php
					// si es un producto agrupado
					if ($product->get_type() == "grouped") {

						if ( types_render_field( "contiene-cantidades-adicionales", array($product->get_id())) == 1 ){
							
							$precios = array();
							$childrenx = $product->get_children();
							
							$hijos = array_column($productos_agrupados, 1);
							foreach($childrenx as $productohijo){
								$childyz = wc_get_product($productohijo);
								if(in_array($productohijo, $hijos)){
									$indice = array_search($childyz->get_id(), $hijos);
									array_push($precios, $childyz->get_price()*$productos_agrupados[$indice][2]);
								}
								else{
									array_push($precios, $childyz->get_price());
								}
							}
							
							echo '<h6 style="text-transform: uppercase;" class="agrupado-contiene-adicionales">Desde: ' . wc_price( ceil(array_sum($precios)) ) . '</h6>';
						}
						 else{
							 $precios = array();
							 $childrenx = $product->get_children();
							 foreach ($childrenx as $childy) {
								 $childyz = wc_get_product($childy);
								 array_push($precios, $childyz->get_price());
							 }
							 echo '<h6 style="text-transform: uppercase;">Desde: ' . wc_price( array_sum($precios)-1 )  . '</h6>';
						 }
					}
					else{
						echo '<h6 style="text-transform: uppercase;">Desde: ' . wc_price( $product->get_price() ) . '</h6>';
					}
					?>
				</div>

				<?php
				if ( str_contains($p_cats, 'exclusivo-online') ) {
					echo "<div class='badge-exclusivo-online'><img src='https://tuttopelle.mx/wp-content/uploads/2022/04/exclusivo-online.png' alt='Exclusivo Online'></div>";
				}
				?>
				<div class="descriptioncont">
					<?php
					echo $product->short_description;
					?>
				</div>

				<?php
			if($product->children){

				?>
				<hr>

				<table class="variations desktop" cellspacing="0">
        		<tbody>
        			<tr>
								<h4 style="margin: 0 0 5px 0;">SELECCIONAR: </h4>
             		<td class="label"><label for="pa_categoria-color">Categoría | Color</label></td>
             		<td class="value">
									<?php
									if( str_contains($p_cats, 'sale') || str_contains($p_cats, 'complementos') || str_contains($p_cats, 'comedores') || str_contains($p_cats, 'accesorios') ){
										?>
										<style>#select-pieles-icon{ display: none; }</style>
									<?php
									}
									?>
									<?php
									if( str_contains($p_cats, 'sale') ){
										$porcentaje_descuento	= 100 - (($product->get_sale_price() * 100) / $product->get_regular_price());
										echo '<div class="numdescuento"><p>-' . round($porcentaje_descuento) . '%</p></div>';

										if ( types_render_field( 'descuento-adicional', array( 'post_id' => $product->get_id(), 'output' => 'raw') ) !== "" ){
											echo '<div class="numdescuento-adicional"><p>+' . types_render_field( 'descuento-adicional', array( 'post_id' => $product->get_id(), 'output' => 'raw') ) . '% <span style="font-size: 10px;">ADICIONAL</span></p></div>';
											//echo '<img src="https://tuttopelle.mx/wp-content/uploads/2022/05/SF_060522.png" style="width: 50px; position: absolute; right: 6px; bottom: 10px;">';
										}
									}
									?>
									<div id="select-pieles-icon"  style="right: 70px;">
										<img src="https://tuttopelle.mx/wp-content/uploads/2021/07/select-pieles.jpg">
									</div>

									<select name="pa_categoria-color" id="pa_categoria-color" onchange="cambioComposicion()">
										<option selected="selected">Elige una opción</option>
										<?php
											$product_child = wc_get_product( $product->children[0] );
											foreach( $product_child->get_variation_attributes() as $taxonomy => $terms_slug ){
												foreach($terms_slug as $term){
					    						$term_obj  = get_term_by('slug', $term, $taxonomy);
				        					$term_name = $term_obj->name; // The Name
				        					$term_slug = $term_obj->slug;
													?>
					  							<option value=<?php echo "'".$term_slug."'" ?>> <?php echo "'".$term_name."'" ?> </option>
													<?php
												}
											}
											?>
									</select>
								</td>
           		</tr>
            </tbody>
      	</table>
				<hr style="margin: 0;">

				<div id="modulos">
  				<input id="productid" value=<? echo $product->get_id(); ?> readonly style="visibility: hidden;">
					<h4>RESUMEN:</h4>
					<table>
						<?php
						foreach ($product->children as $moduloid) {
							$modulo = wc_get_product( $moduloid );
							?>
							<tr>
								<td style="padding: 0 0 4px 0;"><p class='moduloname'><? echo $modulo->name; ?></p></td>
								<td style="padding: 0 0 4px 0;"><input class="quantity" type="number" min="0" value="1" name=<?php echo $moduloid; ?> onkeyup="cambioComposicion()"  oninput="cambioComposicion()" onchange="cambioComposicion()"></td>
							<?php
						}
						?>
					</table>
				</div>
				<hr>

				<div id="ajaxspace"></div>

 				<?php
			}
			else{ ?>

 					<hr class="hola">
 					<div class="pricecont"></div>

						<div id="select-pieles-icon"  style="right: 70px;">
							<img src="https://tuttopelle.mx/wp-content/uploads/2021/07/select-pieles.jpg">
						</div>

						<?php
						if( str_contains($p_cats, 'sale') || str_contains($p_cats, 'complementos') || str_contains($p_cats, 'comedores') || str_contains($p_cats, 'accesorios') ){
							?>
							<style>#select-pieles-icon{ display: none; }</style>
						<?php
						}
						?>
						<?php
						if( str_contains($p_cats, 'sale') ){
							$porcentaje_descuento	= 100 - (($product->get_sale_price() * 100) / $product->get_regular_price());
							echo '<div class="numdescuento"><p>-' . round($porcentaje_descuento) . '%</p></div>';

							if ( types_render_field( 'descuento-adicional', array( 'post_id' => $product->get_id(), 'output' => 'raw') ) !== "" ){
								echo '<div class="numdescuento-adicional"><p>+' . types_render_field( 'descuento-adicional', array( 'post_id' => $product->get_id(), 'output' => 'raw') ) . '% <span style="font-size: 10px;">ADICIONAL</span></p></div>';
								//echo '<img src="https://tuttopelle.mx/wp-content/uploads/2022/05/SF_060522.png" style="width: 50px; position: absolute; right: 6px; bottom: 10px;">';
							}
						}
						?>

 					<?php
 					variation_dropdown();
 					$productparent_id = wc_get_first_parent( $product->get_id() );

 					if( $productparent_id > 0 ){
				       $url = get_permalink( $productparent_id );
				       echo '<a href="'.$url.'"><div class="moduloslink">COMPRAR COMPOSICIÓN</div></a>';
				  }
 			}

				// Description | Default - right column
				if( in_array( $single_product_style, array( 'wide', 'wide tabs' ) ) ) {
					remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
				}

				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
				remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);

				?>

			<?php
					$detallesurl = get_stylesheet_directory_uri()."/iconossvg/detalles.svg";
					$descargaurl = get_stylesheet_directory_uri()."/iconossvg/descarga.svg";
					$politicasurl = get_stylesheet_directory_uri()."/iconossvg/comprasegura.svg";
				?>
					<div class="iconscontainer">
						<span class="iconbtn detalles-btn">
							<img src=<?php echo "'".$detallesurl."'"; ?> >
							<br>DETALLES
						</span>
						<span class="iconbtn">
							<a href="<?php echo types_render_field( 'ficha-tecnica-producto', array( 'post_id' => $product_id, 'output' => 'raw') ); ?>" download>
							<img src=<?php echo "'".$descargaurl."'"; ?> >
							<br>DESCARGAR FICHA
							</a>
						</span>
						<span class="iconbtn politicas-btn">
							<img src=<?php echo "'".$politicasurl."'"; ?> >
							<br>POLÍTICAS DE COMPRA
						</span>
					</div>

				<div id="ayuda-compra">
					<div class="help" style="margin: 10px 0;">
						<?php
							echo do_shortcode('[icon type="icon-help"]');
							echo '<a href="https://api.whatsapp.com/send?phone=523323649205&text=Hola, me gustaría tener ayuda con la compra de ' . $title . '">¿Necesitas ayuda con tu compra?</a>';
						?>
					</div>
					<div class="reviewss">
						<?php
						$rating_count = $product->get_rating_count();
						if ($average = $product->get_average_rating()) :
						echo '<div class="star-rating" title="'.sprintf(__( 'Rated %s out of 5', 'woocommerce' ), $average).'"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span><a href="#">'. $rating_count .' review(s)</a></div>';
						endif;
						?>
						<?php echo do_shortcode('[icon type="icon-star"]'); ?>
						<a id="go-reviews" style="" href="#">Ver reseñas</a>

						<script>
							jQuery(function($){
								$('#go-reviews').click(function ( e ){
									e.preventDefault();
									$('html, body').animate({
										scrollTop: $("#reviews-wrapper").offset().top-100
									}, 800);
								});
							});
						</script>
					</div>
				</div>

				<? echo mfn_share( 'footer' ); ?>

			<?php
				/**
				 * woocommerce_after_single_product_summary hook.
				 *
				 * @hooked woocommerce_output_product_data_tabs - 10
				 * @hooked woocommerce_upsell_display - 15
				 * @hooked woocommerce_output_related_products - 20
				 */
				//do_action( 'woocommerce_after_single_product_summary' );
			?>



		</div>

		<?php echo mfn_share( 'header' ); ?>

	</div>

	<!-- MODULOS EXTRA COMPOSICION / PRODUCTO AGRUPADO  -->

	<div class="background-topbox modulos-topbox">
		<div class="topbox-container">
			<div class="topbox-close">
				<? echo do_shortcode( '[icon type="icon-cancel-fine" color="#888"]'); ?>
			</div>

			<div class="topbox-header">
				<span class="topbox-title">AGREGAR MÓDULO</span>
			</div>

			<div class="topbox-content">

				<?php

					$array_modulos_js = array();
					$otros_atributos_js = array();

					foreach ( $product->children as $moduloid ) {

						$modulo = wc_get_product( $moduloid );
						$img = $modulo->get_image();

								echo "<div id ='". $moduloid ."'class='modulo-topbox' style='text-align: center;'>";

								echo $img;
								echo "<h3>". $modulo->name . "</h3>";

								$variaciones_modulo = $modulo->get_available_variations();

								//VARIACIONES

								$categoriaspieles_modulo = array();
								$otros_atributos = array();

								foreach ( $variaciones_modulo as $variacion_modulo ) {

									if ($variacion_modulo[ 'attributes' ]['attribute_pa_categoria-color' ] ){

										$arrayslug = explode("-", $variacion_modulo[ 'attributes' ]['attribute_pa_categoria-color' ] );

						        		$piel = array(
							        		"variation_id" => $variacion_modulo['variation_id'],
							        		"piel" => $arrayslug[1],
							            	'price_html' => $variacion_modulo['price_html']
						            	);


										$array_modulos_js[ $moduloid ][ $variacion_modulo['variation_id'] ] = $piel;

						        		//$variaciones_modulo

										if ( array_key_exists( $arrayslug[0], $categoriaspieles_modulo ) ){

											if ( array_key_exists( $arrayslug[2], $categoriaspieles_modulo[ $arrayslug[0] ] ) ){

												array_push( $categoriaspieles_modulo[ $arrayslug[0] ][ $arrayslug[2] ], $piel );

											}else{
												$categoriaspieles_modulo[ $arrayslug[0]][$arrayslug[2] ] = array( $piel );
											}

										}else{
											$categoriaspieles_modulo[ $arrayslug[0]][$arrayslug[2] ] = array( $piel );
										}
									}else{

										$atributos = $variacion_modulo[ 'attributes' ];

										//Primer espacio del array es el ID de la variacio
										$variacion_array = array( $variacion_modulo['variation_id'] );

										array_push( $variacion_array , $variacion_modulo['price_html'] );

										foreach  ($atributos as $atributo ) {

											array_push ( $variacion_array, $atributo );

										}

										array_push( $otros_atributos, $variacion_array );

										$otros_atributos_js[ $moduloid ][ $variacion_modulo['variation_id'] ] = $variacion_array;

									}

								}

								//CREAMOS LOS OPTIONS
								if ( count( $categoriaspieles_modulo ) > 0 ){
									//CREAMOS EL ARRAY DE JS PARA LAS ACCIONES DE AJAX

									echo "<select name='". $moduloid ."' class='". $moduloid ." pieles_modulo'>
									<option value='0'>-Elije una piel</option>";

									foreach ( $categoriaspieles_modulo as $categoria ) {

										//Nombre categoria
										$catkey = array_search( $categoria, $categoriaspieles_modulo );

										foreach ( $categoria as $subcategoria) {

											$key = array_search( $subcategoria, $categoria );

											echo "<optgroup label='". $catkey. " - ". $key ."'>";

											foreach ( $subcategoria as $lapiel ) {
												echo "<option value='". $lapiel['variation_id'] ."'>". $lapiel['piel'] ."</option>";
											}

											echo "</optgroup>";
										}
									}

									echo "</select>";

								}

								if ( count( $otros_atributos ) > 0 ){

									echo "<select name='". $moduloid ."' class='". $moduloid ." atributos_modulo'>
									<option value='0'>-Elije una variación</option>";

									foreach ($otros_atributos as $opt) {

										$label;

										for ( $i = 2; $i <= count( $opt ); $i++ ){
											$label .=  $opt[ $i ] . " ";
										}
										echo "<optgroup label='". $opt[0] ."'>";
										echo "<option value='".  $opt[0] ."'>". $label ."</option>";
										echo "</optgroup>";

									}

									echo "</select>";

								}

							?>
							<div class='modulo_price'></div>

						</div>

				<?php
					}
				?>

				<script type="text/javascript">
					var categoriaspieles_modulo = <?php echo json_encode( $array_modulos_js ); ?>;
					var otros_atributos = <?php echo json_encode( $otros_atributos_js ); ?>;
				</script>

			</div>
		</div>
	</div>



	<div id="modulos-extra-relacionados">
		<h3>TAMBIÉN TE PUEDE INTERESAR: </h3>
		<style>
			.post-<?php echo $product->get_id(); ?>{ display: none; }
		</style>
		<?php

		  //var_dump ($product->get_upsell_ids() );
			if( count($product->get_upsell_ids()) > 0 ){
				$upsells = implode( ", ", $product->get_upsell_ids() );
				echo do_shortcode("[products ids='" . $upsells . "' limit='-1' orderby='title']");
			}
			else{
				$slugs = array();
				$product_cats = wp_get_post_terms( $product->get_id(), 'product_cat' );

				foreach ($product_cats as $product_cat){
					$slugs[] = $product_cat->slug;
				}
				$cats_ids_str = implode(", ", $slugs);
				echo do_shortcode("[products category='" . $cats_ids_str . "' limit='3']");
			}
		?>
	</div>


	<?php
	$imagenilustrativa = types_render_field( 'imagen-ilustrativa-productos-relacionados', array( 'post_id' => $product_id, 'output' => 'raw') );
	if( $imagenilustrativa != "" ){
		?>
		<div id="explora-espacio">
			<img src="<?php echo $imagenilustrativa; ?>" width="100%">
		</div>
	<?php
	}
	?>

	<?php
		// Mostrar upsells - woocommerce_upsell_display( $limit, $columns, $orderby, $order );
		//woocommerce_upsell_display( 3, 3 );
		//if( mfn_opts_get( 'shop-related' ) ) woocommerce_output_related_products();
	?>

	<div id="reviews-wrapper">
		<h2>RESEÑAS<?php
			for ($i = 0; $i < 5; $i++){
				echo do_shortcode('[icon type="icon-star"]');
			}
			?>
		</h2>
		<?php echo do_shortcode('[cusrev_reviews]'); ?>
	</div>


</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
