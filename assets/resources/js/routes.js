
export function checkRoute(route) {
    if(route === 'home-page') {
        if(window.location.pathname === '/') {
            return true
        }
    }
    else {
        const regex = new RegExp(route, 'gi')
        if(window.location.pathname.match(regex)){
           return true
        }
    }
}