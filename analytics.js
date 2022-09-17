function analytics(){

		window.dataLayer = window.dataLayer || []

		function gtag() {
		dataLayer.push(arguments)
		} 

		gtag('js', new Date())
		if (typeof gtag !== 'undefined') {
		gtag('consent', 'default', {
			'ad_storage': 'denied',
			'analytics_storage': 'denied'
		});
		gtag('config', 'UA-47877632-1', {
			'page_title': window.location.pathname,
			'page_path': "https://digipoint.biz" + window.location.pathname,
		})
		} 
    }