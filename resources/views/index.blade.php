<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Kişisel Web Sitesi' }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #f8f9fa; color: #333;">
    
    <!-- Header Bölümü -->
    <header style="background-color: #2c3e50; color: white; padding: 2rem 0; text-align: center; position: relative;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <h1 style="margin: 0; font-size: 2.5rem; font-weight: 700;">{{ $name ?? 'Ad Soyad' }}</h1>
            <p style="margin: 1rem 0 0; font-size: 1.2rem; opacity: 0.9;">{{ $title ?? 'Web Geliştirici & Tasarımcı' }}</p>
            
            <nav style="margin-top: 2rem;">
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center; flex-wrap: wrap; gap: 1.5rem;">
                    <li><a href="#hakkimda" style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;">Hakkımda</a></li>
                    <li><a href="#yetenekler" style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;">Yetenekler</a></li>
                    <li><a href="#projeler" style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;">Projeler</a></li>
                    <li><a href="#deneyim" style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;">Deneyim</a></li>
                    <li><a href="#iletisim" style="color: white; text-decoration: none; font-weight: 500; transition: color 0.3s;">İletişim</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Ana İçerik -->
    <main style="max-width: 1200px; margin: 0 auto; padding: 3rem 20px;">

        <!-- Hakkımda Bölümü -->
        <section id="hakkimda" style="margin-bottom: 4rem;">
            <div style="display: flex; flex-wrap: wrap; gap: 2rem; align-items: center;">
                <div style="flex: 1; min-width: 300px;">
                    <h2 style="font-size: 2rem; margin-bottom: 1.5rem; color: #2c3e50; position: relative; padding-bottom: 0.5rem;">Hakkımda</h2>
                    <p style="line-height: 1.6; margin-bottom: 1.5rem;">
                        Merhaba! Ben {{ $name ?? 'Ad Soyad' }}. {{ $yearsExperience ?? '5' }} yıldır web geliştirme alanında çalışıyorum. 
                        Laravel, Vue.js ve React gibi modern teknolojilerle çalışmaktan keyif alıyorum.
                    </p>
                    <p style="line-height: 1.6; margin-bottom: 1.5rem;">
                        Kullanıcı deneyimine odaklanan, performanslı ve ölçeklenebilir web uygulamaları geliştirmeyi seviyorum. 
                        Her projede en yeni teknolojileri ve en iyi pratikleri kullanmaya özen gösteriyorum.
                    </p>
                    <div style="margin-top: 2rem;">
                        <a href="#iletisim" style="display: inline-block; background-color: #3498db; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; font-weight: 500; transition: background-color 0.3s;">Benimle İletişime Geçin</a>
                    </div>
                </div>
                <div style="flex: 1; min-width: 300px; text-align: center;">
                    <img src="{{ asset('images/faruk.png') ?? '/api/placeholder/400/400' }}" alt="Profil Fotoğrafı" style="max-width: 100%; height: auto; border-radius: 50%; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                </div>
            </div>
        </section>

        <!-- Yetenekler Bölümü -->
        <section id="yetenekler" style="margin-bottom: 4rem; background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <h2 style="font-size: 2rem; margin-bottom: 2rem; color: #2c3e50; position: relative; padding-bottom: 0.5rem;">Yeteneklerim</h2>
            
            <div style="display: flex; flex-wrap: wrap; gap: 2rem;">
                <!-- Yetenek Grupları -->
                <div style="flex: 1; min-width: 250px;">
                    <h3 style="font-size: 1.4rem; color: #2c3e50; margin-bottom: 1rem;">Programlama</h3>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">PHP</span>
                            <span>90%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 90%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">JavaScript</span>
                            <span>85%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 85%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">Python</span>
                            <span>70%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 70%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                </div>
                
                <div style="flex: 1; min-width: 250px;">
                    <h3 style="font-size: 1.4rem; color: #2c3e50; margin-bottom: 1rem;">Frameworks & Araçlar</h3>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">Laravel</span>
                            <span>95%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 95%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">Vue.js</span>
                            <span>80%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 80%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">MySQL</span>
                            <span>85%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 85%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                </div>
                
                <div style="flex: 1; min-width: 250px;">
                    <h3 style="font-size: 1.4rem; color: #2c3e50; margin-bottom: 1rem;">Tasarım & Diğer</h3>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">HTML/CSS</span>
                            <span>90%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 90%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">Bootstrap</span>
                            <span>85%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 85%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                    <div style="margin-bottom: 1rem;">
                        <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                            <span style="font-weight: 500;">Git</span>
                            <span>80%</span>
                        </div>
                        <div style="height: 10px; background-color: #e9ecef; border-radius: 5px;">
                            <div style="height: 100%; width: 80%; background-color: #3498db; border-radius: 5px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projeler Bölümü -->
        <section id="projeler" style="margin-bottom: 4rem;">
            <h2 style="font-size: 2rem; margin-bottom: 2rem; color: #2c3e50; position: relative; padding-bottom: 0.5rem;">Projelerim</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 2rem;">
                <!-- Proje 1 -->
                <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s;">
                    <img src="{{ asset('images/faruk.png') ?? '/api/placeholder/400/250' }}" alt="Proje 1" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.4rem; margin-bottom: 1rem; color: #2c3e50;">E-Ticaret Platformu</h3>
                        <p style="line-height: 1.6; margin-bottom: 1.5rem;">
                            Laravel ve Vue.js kullanarak geliştirdiğim kapsamlı bir e-ticaret platformu. 
                            Ödeme entegrasyonu, stok yönetimi ve kullanıcı paneli içerir.
                        </p>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1.5rem;">
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Laravel</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Vue.js</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">MySQL</span>
                        </div>
                        <a href="#" style="display: inline-block; background-color: #2c3e50; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;">Projeyi İncele</a>
                    </div>
                </div>
                
                <!-- Proje 2 -->
                <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s;">
                    <img src="{{ asset('images/faruk.png') ?? '/api/placeholder/400/250' }}" alt="Proje 2" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.4rem; margin-bottom: 1rem; color: #2c3e50;">CRM Sistemi</h3>
                        <p style="line-height: 1.6; margin-bottom: 1.5rem;">
                            Şirketlerin müşteri ilişkilerini yönetebilecekleri Laravel tabanlı bir CRM uygulaması.
                            Detaylı raporlama ve görev takibi özellikleri içerir.
                        </p>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1.5rem;">
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Laravel</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">jQuery</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Bootstrap</span>
                        </div>
                        <a href="#" style="display: inline-block; background-color: #2c3e50; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;">Projeyi İncele</a>
                    </div>
                </div>
                
                <!-- Proje 3 -->
                <div style="background-color: white; border-radius: 8px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: transform 0.3s;">
                    <img src="{{ asset('images/faruk.png') ?? '/api/placeholder/400/250' }}" alt="Proje 3" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <h3 style="font-size: 1.4rem; margin-bottom: 1rem; color: #2c3e50;">Blog & Portföy Teması</h3>
                        <p style="line-height: 1.6; margin-bottom: 1.5rem;">
                            Kişisel blog ve portföy ihtiyaçları için geliştirdiğim özelleştirilebilir Laravel teması.
                            SEO dostu yapısıyla öne çıkıyor.
                        </p>
                        <div style="display: flex; gap: 0.5rem; margin-bottom: 1.5rem;">
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Laravel</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">Blade</span>
                            <span style="background-color: #e9ecef; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem;">SCSS</span>
                        </div>
                        <a href="#" style="display: inline-block; background-color: #2c3e50; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;">Projeyi İncele</a>
                    </div>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 2rem;">
                <a href="#" style="display: inline-block; background-color: #3498db; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; font-weight: 500; transition: background-color 0.3s;">Tüm Projeleri Gör</a>
            </div>
        </section>

        <!-- Deneyim Bölümü -->
        <section id="deneyim" style="margin-bottom: 4rem; background-color: white; border-radius: 8px; padding: 2rem; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
            <h2 style="font-size: 2rem; margin-bottom: 2rem; color: #2c3e50; position: relative; padding-bottom: 0.5rem;">Çalışma Deneyimim</h2>
            
            <div style="display: flex; flex-direction: column; gap: 2rem;">
                <!-- Deneyim 1 -->
                <div style="position: relative; padding-left: 2rem; border-left: 2px solid #3498db;">
                    <span style="display: inline-block; background-color: #3498db; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem; margin-bottom: 0.5rem;">2021 - Şu an</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: #2c3e50;">Kıdemli Full Stack Geliştirici</h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: #6c757d; font-weight: 500;">Tech Innovate Ltd.</h4>
                    <p style="line-height: 1.6;">
                        Büyük ölçekli web uygulamaları geliştirmek için Laravel ve Vue.js kullanıyorum. 
                        Ekip liderliği yaparak junior geliştiricilere mentorluk sağlıyorum.
                        Mikroservis mimarisine geçiş projelerinde aktif rol alıyorum.
                    </p>
                </div>
                
                <!-- Deneyim 2 -->
                <div style="position: relative; padding-left: 2rem; border-left: 2px solid #3498db;">
                    <span style="display: inline-block; background-color: #3498db; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem; margin-bottom: 0.5rem;">2018 - 2021</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: #2c3e50;">Full Stack Web Geliştirici</h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: #6c757d; font-weight: 500;">WebSolutions A.Ş.</h4>
                    <p style="line-height: 1.6;">
                        E-ticaret ve kurumsal web uygulamaları geliştirdim. Laravel, jQuery ve Bootstrap
                        teknolojileriyle çalıştım. Mevcut projelerin optimizasyonu ve yeni özelliklerin
                        entegrasyonundan sorumluydum.
                    </p>
                </div>
                
                <!-- Deneyim 3 -->
                <div style="position: relative; padding-left: 2rem; border-left: 2px solid #3498db;">
                    <span style="display: inline-block; background-color: #3498db; color: white; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.9rem; margin-bottom: 0.5rem;">2016 - 2018</span>
                    <h3 style="font-size: 1.4rem; margin-bottom: 0.5rem; color: #2c3e50;">Junior PHP Geliştirici</h3>
                    <h4 style="font-size: 1.1rem; margin-bottom: 1rem; color: #6c757d; font-weight: 500;">Dijital Çözümler</h4>
                    <p style="line-height: 1.6;">
                        PHP ve MySQL kullanarak web siteleri ve kurumsal uygulamalar geliştirdim.
                        Laravel framework'ü ile tanıştım ve MVC mimarisi üzerinde çalışma deneyimi kazandım.
                    </p>
                </div>
            </div>
        </section>

        <!-- İletişim Bölümü -->
        <section id="iletisim" style="margin-bottom: 2rem;">
            <h2 style="font-size: 2rem; margin-bottom: 2rem; color: #2c3e50; position: relative; padding-bottom: 0.5rem;">İletişime Geçin</h2>
            
            <div style="display: flex; flex-wrap: wrap; gap: 2rem;">
                <div style="flex: 1; min-width: 300px;">
                    <form style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <div style="margin-bottom: 1.5rem;">
                            <label for="name" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Ad Soyad</label>
                            <input type="text" id="name" name="name" style="width: 100%; padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px; font-family: inherit;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label for="email" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">E-posta</label>
                            <input type="email" id="email" name="email" style="width: 100%; padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px; font-family: inherit;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label for="message" style="display: block; margin-bottom: 0.5rem; font-weight: 500;">Mesaj</label>
                            <textarea id="message" name="message" rows="4" style="width: 100%; padding: 0.75rem; border: 1px solid #dee2e6; border-radius: 4px; font-family: inherit; resize: vertical;"></textarea>
                        </div>
                        <button type="submit" style="background-color: #3498db; color: white; border: none; padding: 0.75rem 1.5rem; border-radius: 4px; font-weight: 500; cursor: pointer; transition: background-color 0.3s;">Mesaj Gönder</button>
                    </form>
                </div>
                
                <div style="flex: 1; min-width: 300px;">
                    <div style="background-color: white; padding: 2rem; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                        <h3 style="font-size: 1.4rem; margin-bottom: 1.5rem; color: #2c3e50;">İletişim Bilgileri</h3>
                        
                        <div style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <i class="fas fa-envelope" style="width: 2rem; color: #3498db;"></i>
                            <span>{{ $email ?? 'mail@example.com' }}</span>
                        </div>
                        <div style="margin-bottom: 1rem; display: flex; align-items: center;">
                            <i class="fas fa-phone" style="width: 2rem; color: #3498db;"></i>
                            <span>{{ $phone ?? '+90 555 123 4567' }}</span>
                        </div>
                        <div style="margin-bottom: 1.5rem; display: flex; align-items: center;">
                            <i class="fas fa-map-marker-alt" style="width: 2rem; color: #3498db;"></i>
                            <span>{{ $location ?? 'İstanbul, Türkiye' }}</span>
                        </div>
                        
                        <h3 style="font-size: 1.4rem; margin: 2rem 0 1rem; color: #2c3e50;">Sosyal Medya</h3>
                        <div style="display: flex; gap: 1rem;">
                            <a href="#" style="display: inline-block; width: 40px; height: 40px; background-color: #3498db; color: white; border-radius: 50%; text-align: center; line-height: 40px; transition: background-color 0.3s;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" style="display: inline-block; width: 40px; height: 40px; background-color: #3498db; color: white; border-radius: 50%; text-align: center; line-height: 40px; transition: background-color 0.3s;">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" style="display: inline-block; width: 40px; height: 40px; background-color: #3498db; color: white; border-radius: 50%; text-align: center; line-height: 40px; transition: background-color 0.3s;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" style="display: inline-block; width: 40px; height: 40px; background-color: #3498db; color: white; border-radius: 50%; text-align: center; line-height: 40px; transition: background-color 0.3s;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Bölümü -->
    <footer style="background-color: #2c3e50; color: white; padding: 2rem 0; text-align: center;">
        <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
            <p>© {{ date('Y') }} {{ $name ?? 'Ad Soyad' }}. Tüm hakları saklıdır.</p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Burada ihtiyaç duyduğunuz JavaScript kodlarını ekleyebilirsiniz
        document.addEventListener('DOMContentLoaded', function() {