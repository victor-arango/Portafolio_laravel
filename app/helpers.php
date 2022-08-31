<?php 


function setActive($routeName) {


return request()->routeIs($routeName) ? 'active' : '';


}


function linkActive($routeName) {
     
 return request()->routeIs($routeName) ? 'textActive' : 'TextInactive' ;   
     
}

function NavbarActive($routeName) {
     
 return request()->routeIs($routeName) ? 'Close' : '' ;   
     
}


function LogoDinamic($routeName) {
     
 return request()->routeIs($routeName) ? 'Logo' : '' ;   
     
}
