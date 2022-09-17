
function navMenu(active){


    let home = "none";
    let about = "none";
    let services = "none";
    let works = "none";
    
    if(active == "home") {
        home = 'active';
    }		if(active == "about") {
        about = 'active';
    }		if(active == "services") {
        services = 'active';
    }		if(active == "careers") {
        careers = 'active';
    }

    let container = document.getElementById("loadHere");

    let div = document.createElement("div");
  

    let unorderedList = document.createElement("ul");
    let link = document.createElement("a");
    let icon = document.createElement("i");
    let navLink = document.createElement("a");


    let homeLink = document.createElement("a");
    let aboutLink = document.createElement("a");
    let servicesLink = document.createElement("a");
    let careersLink = document.createElement("a");

    homeLink.innerHTML = 'HOME';
    aboutLink.innerHTML = "ABOUT";
    servicesLink.innerHTML = "SERVICES";
    careersLink.innerHTML = "CAREERS";


    homeLink.setAttribute("href","index.html");
    aboutLink.setAttribute("href","about.html");
    servicesLink.setAttribute("href","services.html");
    careersLink.setAttribute("href","careers.html"); 
    

    div.classList.add("navbar-collapse", "collapse");
    unorderedList.classList.add("nav", "navbar-nav", "navbar-right");
    icon.classList.add("fa", "fa-envelope-o");
    div.appendChild(unorderedList);


    for (let i = 0; i < 5; i++) {
        let li_elem = document.createElement("li");      
        unorderedList.appendChild(li_elem);
    }

    unorderedList.childNodes[0].classList.add(home);
    unorderedList.childNodes[1].classList.add(about);
    unorderedList.childNodes[2].classList.add(services);
 


    unorderedList.childNodes[0].appendChild(homeLink);
    unorderedList.childNodes[1].appendChild(aboutLink);
    unorderedList.childNodes[2].appendChild(servicesLink);
    unorderedList.childNodes[3].appendChild(careersLink);

    unorderedList.childNodes[4].appendChild(link);


    link.setAttribute("data-toggle", "modal");
    link.setAttribute("data-target", "#myModal");
    link.setAttribute("href", "#myModal");
    

    
    link.appendChild(icon); 


    container.appendChild(div);
    



}