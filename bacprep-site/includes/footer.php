
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
/* Footer */
.footer {
            background-color: #2c3e50;
            padding: 3rem 2rem 1rem;
            color: white;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-info h3 {
            color: white;
            margin-bottom: 1rem;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .footer-info p,
        .footer-info a {
            color: #bdc3c7;
            text-decoration: none;
            line-height: 1.6;
            display: block;
            margin-bottom: 0.5rem;
        }
        
        .footer-info a:hover {
            color: #3498db;
        }
        
        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: #3498db;
            transform: translateY(-2px);
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bdc3c7;
            font-size: 0.9rem;
        }
</style>

<footer class="footer">
        <div class="footer-content">
            <div class="footer-info">
                <h3><i class='bx bx-book'></i> BacPrep</h3>
                <p>Plateforme de préparation au baccalauréat offrant des ressources pédagogiques de qualité pour toutes les filières.</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/moha.sy.603544"><i class='bx bxl-facebook'></i></a>
                    <a href="https://instagram.com/moha_syb"><i class='bx bxl-instagram'></i></a>
                    <a href="https://wa.me/212675238048"><i class='bx bxl-whatsapp'></i></a>
                </div>
            </div>
            <div class="footer-info">
                <h3><i class='bx bx-map'></i> Contact</h3>
                <p><i class='bx bx-envelope'></i>mohamed.sybous@gmail.com</p>
                <p><i class='bx bx-phone'></i> +212 675238048</p>
                <p><i class='bx bx-map'></i> Ouled Berhil, Maroc</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 EduMaroc - Plateforme d'Éducation Marocaine. Tous droits réservés. 🇲🇦</p>
        </div>
    </footer>