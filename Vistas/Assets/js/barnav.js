const peticionBarnav = new XMLHttpRequest();
var respuestaVerificarSesion;
const peticionVerificarSesion = new XMLHttpRequest();
var  tipoCuenta;
peticionBarnav.open("POST", "/Skate/Vistas/skaters/barnav.html");
peticionBarnav.send();

peticionBarnav.onload = function () {
  document.getElementById("insertar-barra").innerHTML = `${this.responseText}`;
  peticionVerificarSesion.open("POST","/Skate/PHP/sketis/verificar_sesion.php");
  peticionVerificarSesion.withCredentials = true;
  peticionVerificarSesion.send();
};

peticionVerificarSesion.onload = function () {
  respuestaVerificarSesion=JSON.parse(this.responseText);
  if (respuestaVerificarSesion.success === true) {
    document.getElementById("nombre-persona").innerHTML = `${respuestaVerificarSesion.nombre}`;

    if (respuestaVerificarSesion.tipo === 2) {
      document.getElementById("menu-personalizado").innerHTML = `
                  <a href="almacenistas.html">Almacenistas</a>
                                    <a href="articulos.html">Articulos</a>`;                           
      tipoCuenta = 2;
      document.getElementById("carro-opcion").innerHTML=`
                  <a href="carrito.html">
                  <img src="../Assets/icons/baseline_shopping_cart_white_18dp.png" class="shopping-icon">
                  </a>`;                         

    } else if (respuestaVerificarSesion.tipo === 3) {
      document.getElementById("menu-personalizado").innerHTML = `
                  <a href="articulos.html">Articulos</a>`;
      tipoCuenta = 3;
    }else if (respuestaVerificarSesion.tipo === 1) {
      document.getElementById("carro-opcion").innerHTML=`
                  <a href="carrito.html">
                  <img src="../Assets/icons/baseline_shopping_cart_white_18dp.png" class="shopping-icon">
                  </a>`; 
      tipoCuenta = 1;
    }
    verificarUbicacion();

  } else {

    document.getElementById("menu").innerHTML = ``;
    verificarUbicacion();

  }

};

function login(){
  window.location.href = 'login.html';

}

function cerrar_sesion(){
  tipoCuenta=0;
  var respuestaCerrarSesion;
  const peticionCerrarSesion = new XMLHttpRequest();
  peticionCerrarSesion.onload = function () {
    respuestaCerrarSesion=JSON.parse(this.responseText);
    if(respuestaCerrarSesion.success===true){
      window.location.href = 'login.html';
    }
  };

  peticionCerrarSesion.open("POST","/Skate/PHP/sketis/cerrar_sesion.php",true);
  peticionCerrarSesion.withCredentials = true;
  peticionCerrarSesion.send();
}


    function verificarUbicacion() {
      if (window.location.pathname === "/Skate/Vistas/skaters/almacenistas.html"||
        window.location.pathname==="/Skate/Vistas/skaters/registro-almacenista.html") {

        if (tipoCuenta !== 2) {
          window.location.href = '404.html';

        }

      }else if (window.location.pathname === "/Skate/Vistas/skaters/articulos.html"||
        window.location.pathname==="/Skate/Vistas/skaters/registro-articulos.html") {

        if (tipoCuenta !== 2&&tipoCuenta!==3) {
          window.location.href = '404.html';

        }

      }
      else if (window.location.pathname === "/Skate/Vistas/skaters/cuenta.html") {
        if (tipoCuenta === 0||tipoCuenta === undefined) {
          window.location.href = '404.html';
        }
      }

      else if (window.location.pathname === "/Skate/Vistas/skaters/index.html")
      {
        if (tipoCuenta === 3)
        {
          window.location = 'index-almacenista.html';
        }
      }

      else if (window.location.pathname === "/Skate/Vistas/skaters/tablas.html")
      {
        if (tipoCuenta === 3)
        {
          window.location = 'tablas-almacenista.html';
        }
      }

      else if (window.location.pathname === "/Skate/Vistas/skaters/trucks.html")
      {
        if (tipoCuenta === 3)
        {
          window.location = 'trucks-almacenista.html';
        }
      }

      else if (window.location.pathname === "/Skate/Vistas/skaters/llantas.html")
      {
        if (tipoCuenta === 3)
        {
          window.location = 'llantas-almacenista.html';
        }
      }

    }


