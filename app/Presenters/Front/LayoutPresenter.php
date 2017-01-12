<?php 

namespace App\Presenters\Front;

class LayoutPresenter{
	public function showMenus($menus){
		$str = '<ul class="js-nav-main-header nav-main-header pull-right">';
		$str .= '<li class="text-right hidden-md hidden-lg">';
		$str .= '   <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">';
		$str .= '       <i class="fa fa-times"></i>';
		$str .= '    </button>';
		$str .= '</li>';

		if(!$menus->isEmpty()){
			foreach($menus as $menu){
				$str .= '<li>';
				$str .= '	<a class="active" href="frontend_home_header_nav.html">'.$menu->title.'</a>';
				$str .= '</li>';
			}
		}
		$str .= '</ul>';
		return $str;
	}
}

/*
<ul class="js-nav-main-header nav-main-header pull-right">
            <li class="text-right hidden-md hidden-lg">
                <!-- Toggle class helper (for main header navigation in small screens), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-link text-white" data-toggle="class-toggle" data-target=".js-nav-main-header" data-class="nav-main-header-o" type="button">
                    <i class="fa fa-times"></i>
                </button>
            </li>
            <li>
                <a class="active" href="frontend_home_header_nav.html">Home</a>
            </li>
            <li>
                <a class="nav-submenu" href="javascript:void(0)">Pages</a>
                <ul>
                    <li>
                        <a href="frontend_team.html">Team</a>
                    </li>
                    <li>
                        <a href="frontend_support.html">Support</a>
                    </li>
                    <li>
                        <a href="frontend_search.html">Search</a>
                    </li>
                    <li>
                        <a href="frontend_about.html">About</a>
                    </li>
                    <li>
                        <a href="frontend_login.html">Login</a>
                    </li>
                    <li>
                        <a href="frontend_signup.html">Sign Up</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="frontend_features.html">Features</a>
            </li>
            <li>
                <a href="frontend_pricing.html">Pricing</a>
            </li>
            <li>
                <a href="frontend_contact.html">Contact</a>
            </li>
        </ul>

*/