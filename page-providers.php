<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/providers.css" rel="stylesheet">
<!--<script>
	require(["require.config"], function() {
		require(["modules/jquery-321"])
	});
</script>-->
</head>
<div class="background gdpr-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Nextcloud Hosting Providers');?></h1>
				<h2><?php echo $l->t('Helping Nextcloud users keep their data under control');?></h2>
			</div>
		</div>
	</div>
</div>


<section class="section--intro">
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph text-center"><?php echo $l->t('Nextcloud is a private cloud solution you can host wherever you want. On your own hardware,');?> <a class="hyperlink" href="<?php echo home_url('devices') ?>"><?php echo $l->t('a device you bought</a> or at a provider!');?><p>
		</div>
	</div>
</div>
</section>
<section class="section--overview">
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <p class="section--paragraph__tittle">Trusted hosting</p>
            <p class="section--paragraph"><?php echo $l->t('We have dozens of different hosting providers who offer anything from a Virtual Machine with Nextcloud you have to manage yourself to a fully maintained Nextcloud account where you just have to log in. Some providers offer (limited) free tiers, some focus on home users and others on business; some aim for low prices while others offer extensive backups, downtime prevention and great support. Pick what you need!');?></p>
            <p class="section--paragraph"><?php echo $l->t('If you need services to manage your self-hosted Nextcloud server, see ');?><a class="hyperlink" href="<?php echo home_url('partners') ?>"><?php echo $l->t('our partner page</a>.');?><p></p>
        </div>
    </div>
</div>
</section>

<section class="section--partners">
<div class="container">
    <div class="row">
        <div class="text-center">
        <h1><?php echo $l->t('Official providers');?></h1>
        </div>
        <div class="col-md-10 col-md-offset-1">
            <p><?php echo $l->t('Our partners below have been carefully vetted for knowledge and experience managing Nextcloud instances. They provide secure, trusted hosting with the backing of Nextcloud Subscription, giving them access to the expertise of our engineers to keep the service run reliably.');?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="https://www.etes.de/" target="_blank" title="etes">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/etes.png" title="etes" />
            </a>
            <p><small>serves enterprises</small></p>
            <p class="partnertext">ETES GmbH is an IT company from Stuttgart with a focus on Linux and Open Source, offering numerous IT services from advice to implementation, maintenance and support. The servers are hosted in Germany which guarantees industry standards concerning security (aligned to ISO 27001).</p>
        </div>
        <div class="col-md-4">
            <a href="https://www.hkn.de/nextcloud-server.php" target="_blank" title="HKN">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/hkn.png" title="HKN logo" />
            </a>
            <p><small>serves enterprises</small></p>
            <p  class="partnertext">HKN has been making the internet easier for its customers since 1996. We are a specialist for fully managed Servers hosted in Germany with German privacy protection.</p>
        </div>
        <div class="col-md-4">
            <a href="https://360ict.nl/" target="_blank" title="360ICT">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/360ict.png" title="360ICT logo" />
            </a>
            <p><small>serves enterprises</small></p>
            <p  class="partnertext">In a world where business depends on ICT, 360 ICT delivers garantees in the form of hard SLA's while remaining as approachable as a local ICT company for small and medium businesses. Our strength: solid, solution-focused and personal.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="http://www.netcloud.ch/" target="_blank" title="Netcloud AG">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/netcloud.png" title="netcloud logo" />
            </a>
            <p><small>serves enterprises</small></p>
            <p class="partnertext">Netcloud AG is a Winterthur (Zurich)-based company with 130 employees. Core competencies include consulting, designing, implementing and operating IT infrastructure solutions around Cisco technology, borderless networks, data-center and unified communications solutions.</p>
        </div>
        <div class="col-md-4">
            <a href="https://www.sendin.nl/nextcloud/" target="_blank" title="Sendin">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/sendin.png" title="sendin logo" />
            </a>
            <p><small>serves enterprises</small></p>
            <p  class="partnertext">Sendin is a Dutch company specializing in the storage and shipping of files, building simple solutions so users need no manual. Our clients use our solutions to make their files and documents accessible in the cloud but also for paperless meetings and more.</p>
        </div>
        <div class="col-md-4">
            <a href="https://www.stylez.co.jp/" target="_blank" title="Stylez">
            <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/partners/stylez.png" title="stylez logo" />
            </a>
            <p><small>serves enterprises</small></p>
            <p  class="partnertext">Since 2013, Stylez has grown by focusing on integration and Business Process Outsourcing. Today Stylez expands its scope into cloud and open source services, keeping up their focus on customers and quality.</p>
        </div>
    </div>
</div>



</section>
<section class="section--providerlist">
<div class="container">
    <div class="row">
        <div class="row text-center">
        <h1><?php echo $l->t('Other providers');?></h1>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p><?php echo $l->t('Please note that we have no formal relationship with any of these providers and take no responsibility for their services or quality. If you want to be sure to get quality service with the backing of Nextcloud engineers,');?> <a class="hyperlink" href="<?php echo home_url('contact') ?>"><?php echo $l->t('get in contact with us</a>');?> <a class="hyperlink" href="<?php echo home_url('partners') ?>"><?php echo $l->t('or one of our partners.</a>');?></p>
                <p><?php echo $l->t('You can leave comments on your experiences with the providers or ask questions <a class="hyperlink" href="https://help.nextcloud.com/c/hosting">in our hosting category on the forums.</a> Feedback is VERY much welcomed as it helps others to choose their ideal provider!');?></p>
                <p><?php echo $l->t('If you offer Nextcloud Server account hosting, you can be <a class="hyperlink" href="/providers/apply">listed on this page</a>. If you want to report an abuse by one of the providers listed above, you can send us an email to abuse@nextcloud.com.');?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            Country: <select id="countryPicker" class="form-control">
                <option value="all">World</option>
            </select>
            <p><input type="checkbox" id="FreePlans"> <?php echo $l->t('Show only free plans');?></p>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <p><?php echo $l->t('Consumers or Enterprise focus:');?><br/>
            <input type="radio" id="hostingconsumer" name="hosting" value="consumer"> <?php echo $l->t('Consumers');?><br/>
            <input type="radio" id="hostingorganization" name="hosting" value="organization"> <?php echo $l->t('Enterprises');?><br/>
            <input type="radio" id="hostingboth" name="hosting" value="both" checked> <?php echo $l->t('Both');?></p>
        </div>
    </div>

    <div id="providers" class="row">
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p><?php echo $l->t('If you offer Nextcloud Server account hosting, you can be <a class="hyperlink" href="/providers/apply">listed on this page</a>. If you want to report an abuse by one of the providers listed above, you can send us an email to abuse@nextcloud.com.');?></p>
        </div>
    </div>
</div>
</section>

<script type="text/javascript">
// 	$( "#hostingboth" ).prop( "checked", true );
	$( document ).ready(function() {
		var items = [];
		var countries = [];
		var selectedCountryCode = 'all';
		var filterFreePlans = false;

		var filterHosting = 'both';
		/**
		 * Based on the Apache licensed https://github.com/coolaj86/knuth-shuffle
		 */
		 function shuffle(array) {
		 	var currentIndex = array.length, temporaryValue, randomIndex;

		 	// While there remain elements to shuffle...
		 	while (0 !== currentIndex) {
		 		// Pick a remaining element...
		 		randomIndex = Math.floor(Math.random() * currentIndex);
		 		currentIndex -= 1;

		 		// And swap it with the current element.
		 		temporaryValue = array[currentIndex];
		 		array[currentIndex] = array[randomIndex];
		 		array[randomIndex] = temporaryValue;
		 	}
		 	return array;
		 }
		function filterItems(country, plan, hosting) {
			var filteredItems = [];
			$.each(items, function (key, provider) {
				// Filter for the country
				if(typeof country !== 'undefined' && country !== 'all') {
					var hasCountryFlag = false;
					$.each(provider.flags, function (key, value) {
						if(value === country) {
							hasCountryFlag = true;
						}
					});
					if(!hasCountryFlag) {
						return true;
					}
				}
				// Filter for free plans
				if (plan) {
					if(provider.freeplans !== true) {
						return true;
					}
				}
				// Filter for who this is perfect for
				if(hosting !== 'both') {
					if(provider.supports !== 'both') {
						if(provider.supports !== hosting) {
							return true;
						}
					}
				}
				// Iterate and template all the remaining ones. Yay.
				filteredItems.push('<div class="col-xs-12 col-sm-6 col-md-4">');
						filteredItems.push('<div class="provider prov-thumbnail"> ');
							filteredItems.push('<div class="bannerhead">')
								filteredItems.push('<a href="');
								filteredItems.push(provider.url);
								filteredItems.push('" target="_blank" title="');
								filteredItems.push(provider.title);
								filteredItems.push('"><img class="provider-logo" src="<?php echo get_template_directory_uri() ?>/assets/img/providers/');
								filteredItems.push(provider.imagename);
								filteredItems.push('"></a><br \>');
								filteredItems.push(provider.title);
								$.each(provider.flags, function (key, value) {
									filteredItems.push('<img class="flag" src="<?php echo get_template_directory_uri() ?>/assets/img/flags/' + value + '.gif">');
									// Add country to country array if it does not exists.
									if ($.inArray(value, countries) == -1) {
										countries.push(value);
									}
								});
							filteredItems.push('<br \></div>');
							filteredItems.push('<div class="bannerfoot">');
								filteredItems.push('<p>');
									filteredItems.push(provider.specializes);
								filteredItems.push('</p>');
							filteredItems.push("</div>");
						filteredItems.push("</div>");
					filteredItems.push("</div>");
 				filteredItems.push("</div>");
// 			filteredItems.push("</div>");
			});
			$('#providers').empty();
			$("<div/>", {
				html: filteredItems.join("")
			}).appendTo('#providers');
		}

		var request = new XMLHttpRequest();
		request.open('GET', '<?php echo get_template_directory_uri() ?>/assets/providers.json', true);

		request.onload = function() {
		  if (request.status >= 200 && request.status < 400) {
		    items = JSON.parse(request.responseText);

		    shuffle(items);
		    filterItems(selectedCountryCode, filterFreePlans, filterHosting);

		    $.each(countries, function (key, countryCode) {
		        $('#countryPicker').append($('<option/>', {
		          value: countryCode,
		          html: countryCode
		        }));
		      });
		  } else {
		    // We reached our target server, but it returned an error

		  }
		};

		request.onerror = function() {
		  // There was a connection error of some sort
		};
		request.send();

		$('#countryPicker').change(function () {
			selectedCountryCode = $(this).find("option:selected").attr('value');
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
		$('#FreePlans').change(function () {
			filterFreePlans = $('#FreePlans').is(':checked');
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
// 		$('#certified').change(function () {
// 			filterOnlyCertified = $('#certified').is(':checked');
// 			filterItems(selectedCountryCode, filterFreePlans, filterOnlyCertified, filterHosting);
// 		});
		$("input[name='hosting']").change(function () {
			filterHosting = $(this).val();
			filterItems(selectedCountryCode, filterFreePlans, filterHosting);
		});
	})
</script>
