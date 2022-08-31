<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
          />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
 

    <!-- Font Awesome -->
    <link
          rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          />
    <!-- Google Fonts Roboto -->
    <link
          rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
          />
    <!-- MDB -->

      <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <!-- <link
          href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css"
          rel="stylesheet"
          /> -->

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Overpass:wght@300;700&display=swap');
      body{
        background:rgb(255, 255, 255); 
        overflow-x: hidden ;
      }
      .webgl {
        position: absolute;
        top: 0;
        left: 0;
        /* outline: none; */
          /* mix-blend-mode:exclusion; */
        z-index: 1;
        
        
      }
      .container__inicio_targeta{
        display: flex;
        position: absolute;  
        flex-direction: column;
        bottom: 10px;
        width: 95%;
        height: 70%;
        z-index: 999;
        background: rgba( 251, 251, 251, 0.05 );
      box-shadow: 0 8px 32px 0 rgba(182, 183, 196, 0.37);
      backdrop-filter: blur( 3px );
      -webkit-backdrop-filter: blur( 5px );
      border-radius: 10px;
      border: 1px solid rgba( 255, 255, 255, 0.18 );
        animation: slideInUp; /* referring directly to the animation's @keyframe declaration */
     animation-duration: 2s; /* don't forget to set a duration! */
      }

      .container__inicio_titulo{

        display: block;
        padding: 20px 30px;
      }

      .container__inicio_titulo span{
        color: #fff;
        font-size: 3rem;
        font-family: 'Overpass', sans-serif;
        font-weight: 700;
        line-height: 90%;
        
      }
      .container__inicio_titulo p{
        color: #fff;
        font-size: 15px;
        font-family: 'Overpass', sans-serif;
        
        margin: 0 20px;
      }
      .logo{
      margin-top: 25px;
      display: flex;
      width: 50px;
      height: 50px;
      position: absolute;
      right: 30px;
    }
    .container__inicio_descripcion{
      display: flex;
      flex-direction: column;
      padding: 10px ;
    }
    .conainer__inicio_descripcion_info{
     
    color: #fff;
    width: 90%;
    display: flex;
     font-family: 'Overpass', sans-serif;
    }
    

    .foto{
      display: flex;
      height: 200px;
      width: 200px;
    }

      button{
        position: absolute;
        bottom: 30px;
        right: 40px;
        height: 50px;
        width: 100px;
       color: #fff;
        background: rgba(255, 255, 255, 0.16);
        border-radius: 5px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(6.3px);
        -webkit-backdrop-filter: blur(6.3px);
        border: 1px solid rgba(255, 255, 255, 0.18);
              }


      button:hover{
       
        box-shadow: 0 4px 30px rgba(255, 255, 255, 0.5);
      }

    @media (min-width: 820px)  {

      .webgl {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
      }
      .container__inicio_targeta{
        width: 80%;
        bottom: 50px;
       
      }

      .container__inicio_descripcion{
      display: flex;
      flex-direction: row;
      padding: 20px ;
      }
      .conainer__inicio_descripcion_info {
        width: 50%;
        margin: auto;
      }
      


    .foto{
      display: flex;
      height: 300px;
      width: 300px;
    }

   }
   @media (min-width: 920px)  {

    .container__inicio_targeta{
        width: 90%;
       
      }



   }
   @media (min-width: 1100px)  {

.container__inicio_targeta{
    width: 60%;
   
  }



}

    </style>
  </head>
  <body>
    <div class="container__inicio">
      <div class="container__inicio_3d">
        <canvas class="webgl"></canvas>   
      </div>
      <div class="container__inicio_targeta animate__slideInUp">
        <div class="container__inicio_titulo">
          <span>Víctor Arango </span>
          <p>Web Designer and Developer</p>
        </div>
        <img  class="logo" src="/img/logo va dev.png" alt="">
       
        <div class="container__inicio_descripcion">
          <img  class="foto"src="" alt="">
          <div class="conainer__inicio_descripcion_info">
            <p>
              Actualmente diseño, rediseño y programo nuevos proyectos y sitios de aplicaciones web, ya sea del lado del cliente (Front-end, UX / UI) como del lado del servidor (Back-end).

            Continuamente aprendiendo y adquiriendo nuevas habilidades en función a las actuales y futuras demandas y tendencias tecnológicas en el campo del diseño y desarrollo de aplicaciones web en general.

            Apasionado con el trabajo que realizo, ofreciendo y aportando mis conocimientos, habilidades y experiencia, así como nuevas ideas, soluciones, personalización y seguimiento de calidad al cliente y su objetivo en cada proyecto.
            </p>
          </div>

          <a href="{{ route('home')}}">
               <span class="btn-text">@lang('Get Star')</span>
          </a>
          <button>
            Sobre mí
           </button>
        </div>
      </div>
 

    </div>

   

    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"
            ></script>

    <!-- Three.js core -->
    <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"
            ></script>
    <!-- Three.js setup -->
    <script type="text/javascript">

      // Texture
      const textureLoader = new THREE.TextureLoader();
      const normalTexture = textureLoader.load("/img/moon.jpg");

      // Canvas
      const canvas = document.querySelector("canvas.webgl");

      // Scene
      const scene = new THREE.Scene();

      // Objects
      const geometry = new THREE.SphereBufferGeometry(0.7,65,65);

      // Materials
      const material = new THREE.MeshStandardMaterial();
      material.map = normalTexture;

      // Mesh
      const shape = new THREE.Mesh(geometry, material);
      scene.add(shape);

      // Lights
      const pointLight = new THREE.PointLight(0xffffff, 1.2);
      pointLight.position.x = 4;
      pointLight.position.y = 2;
      pointLight.position.z = 7;
      scene.add(pointLight);

      /**
       * Sizes
       */
      const sizes = {
        width: window.innerWidth,
        height: window.innerHeight,
      };

      window.addEventListener("resize", () => {
        // Update sizes
        sizes.width = window.innerWidth;
        sizes.height = window.innerHeight;

        // Update camera
        camera.aspect = sizes.width / sizes.height;
        camera.updateProjectionMatrix();

        // Update renderer
        renderer.setSize(sizes.width, sizes.height);
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      });

      /**
       * Camera
       */
      // Base camera
      const camera = new THREE.PerspectiveCamera(
        90,
        sizes.width / sizes.height,
        0.1,
        100
      );
      camera.position.x = -0.4;
      camera.position.y = 0;
      camera.position.z = 1;
      scene.add(camera);

      /**
       * Renderer
       */
      const renderer = new THREE.WebGLRenderer({
        canvas: canvas,
      });
      renderer.setSize(sizes.width, sizes.height);
      renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

      /**
       * Animate
       */
  document.addEventListener("mousemove", onDocumentMouseMove);

      let mouseX =0;
      let mouseY =0;

      let targetX = 0;
      let targetY =0;

      const windowX = window.innerWidth / 2;
      const windowY = window.innerHeight / 2;

      function onDocumentMouseMove(event){
        mouseX = event.clientX - windowX;
        mouseY = event.clientY - windowY;
      }

      const updateShape = (event) => {
        shape.position.y = window.scrollY * 0.001;
      };

      window.addEventListener("scroll", updateShape)


      const clock = new THREE.Clock();

      const tick = () => {

        targetX = mouseX * 0.001;
        targetY =mouseY  * 0.001;

        const elapsedTime = clock.getElapsedTime();

        // Update objects
        shape.rotation.y = 0.5 *elapsedTime;
        shape.rotation.y += 0.5 * (targetX - shape.rotation.y);
        shape.rotation.x += 0.5 * (targetY - shape.rotation.x);

        // Update Orbital Controls
        // controls.update()

        // Render
        renderer.render(scene, camera);

        // Call tick again on the next frame
        window.requestAnimationFrame(tick);
      };

      tick();
    </script>
  </body>
</html>