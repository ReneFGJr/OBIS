  <div class="hero">
      <div class="overlay"></div>
      <div class="logo-container">
          <h1>OBIS</h1>
          <p>Observatório Inteligente da Sociobiodiversidade
          <br> da bacia hidrográfica do Rio Doce</p>
      </div>
  </div>

  <style>
      .hero {
          display: flex;
          align-items: center;
          justify-content: center;
          height: auto;
          padding: 20px;
          /* Imagem do Vale do Rio Doce */
          background-size: cover;
          background-position: center;
          position: relative;
      }

      .overlay {
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(0, 0, 0, 0.45);
          border-radius: 30px;
          z-index: 1;
      }

      .logo-container {
          position: relative;
          z-index: 2;
          text-align: center;
          color: #fff;
      }

      .logo-container h1 {
          font-family: 'Montserrat', sans-serif;
          font-size: 10rem;
          letter-spacing: 2px;
          margin-bottom: 0.5rem;
          color: #ffffff;
          border-top: 4px solid #cfe7dc;
          border-bottom: 4px solid #cfe7dc;
          text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
      }

      .logo-container p {
          font-size: 1.3rem;
          margin: 0;
          color: #cfe7dc;
      }

      @media (max-width: 768px) {
          .logo-container h1 {
              font-size: 2.5rem;
          }

          .logo-container p {
              font-size: 1rem;
          }
      }
  </style>