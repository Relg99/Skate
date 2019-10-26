var backendCetiPay="/Skate/PHP/cetipay/";
const peticionBarnav = new XMLHttpRequest();
var respuestaVerificarSesion;
const peticionVerificarSesion = new XMLHttpRequest();
var iniciosesion;
peticionBarnav.open("POST", "/Skate/Vistas/cetipay/barnav.html");
peticionBarnav.send();
if (window.location.pathname !== "/Skate/Vistas/cetipay/index.html") {
    peticionBarnav.onload = function () {
        document.getElementById("insertar-barra").innerHTML = `${this.responseText}`;
        peticionVerificarSesion.open("POST", backendCetiPay + "verificar_sesion.php");
        peticionVerificarSesion.withCredentials = true;
        peticionVerificarSesion.send();
    };
}
peticionVerificarSesion.onload = function() {
    respuestaVerificarSesion = JSON.parse(this.responseText);
    if (respuestaVerificarSesion.success === true) {
        iniciosesion = true;
        document.getElementById("nombre-persona").innerHTML = `<a><div>${respuestaVerificarSesion.nombre}</div></a>
`;
        document.getElementById("menu-personalizado").innerHTML = `<li><a href="cuenta.html">Cuenta</a></li>
                        <li onclick="cerrar_sesion()"><a >Cerrar Sesión</a></li>`;



    } else {
        iniciosesion = false;

        document.getElementById("menu-personalizado").innerHTML = '';

    }
    verificarUbicacion();
};

function login() {
    window.location.href = 'login.html';

}

function cerrar_sesion() {
    tipoCuenta = 0;
    var respuestaCerrarSesion;
    const peticionCerrarSesion = new XMLHttpRequest();
    peticionCerrarSesion.onload = function() {
        respuestaCerrarSesion = JSON.parse(this.responseText);
        if (respuestaCerrarSesion.success === true) {
            window.location.href = 'login.html';
        }
    };

    peticionCerrarSesion.open("POST", backendCetiPay+"cerrar_sesion.php", true);
    peticionCerrarSesion.withCredentials = true;
    peticionCerrarSesion.send();

}

function verificarUbicacion() {

    if (window.location.pathname === "/Skate/Vistas/cetipay/canjear_codigo.html" ||
        window.location.pathname === "/Skate/Vistas/cetipay/cuenta.html"
    ) {
        if (iniciosesion != true) {
            window.location.href ="login.html";
        }
    }
}
