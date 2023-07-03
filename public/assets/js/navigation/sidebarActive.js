var currentLocation = location.pathname;

var buttonDashboard = document.getElementById('button-dashboard');
var hiddenDashboard = document.getElementById('hi-dashboard');
var buttonCategory = document.getElementById('button-category');
var hiddenCategory = document.getElementById('hi-category');
var buttonKelola = document.getElementById('button-kelola');
var hiddenKelola = document.getElementById('hi-kelola');
var buttonProduct = document.getElementById('button-product');
var buttonTestimoni = document.getElementById('button-testimoni');
var buttonSetting = document.getElementById('button-setting');
var hiddenSetting = document.getElementById('hi-setting');
var buttonOfflineStore = document.getElementById('button-offline-store');
var buttonBanner = document.getElementById('button-banner');

if ('/dashboard' == currentLocation) 
{
    buttonDashboard.className = 'flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm';
    hiddenDashboard.className = 'block';
} 

else if ('/dashboard/category' == currentLocation) 
{
    buttonCategory.className = 'flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm';
    hiddenCategory.className = 'block';
}
else if ('/dashboard/products' == currentLocation) 
{
    buttonKelola.className = 'flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm w-full';
    buttonProduct.className = 'flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm';
    hiddenKelola.className = 'block';
}
else if ('/dashboard/testimony' == currentLocation) 
{
    buttonKelola.className = 'flex justify-between items-center md:px-10 py-3 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm w-full';
    buttonTestimoni.className = 'flex items-center md:pl-12 py-1 hover:bg-[#F6E0E6] text-[#861B43] font-bold hover:text-gray-400 text-sm';
    hiddenKelola.className = 'block';
}
else {
}