--SEED DES UTILISATEURS ET DES ROLES
INSERT INTO users (`name`, email, email_verified_at, password, remember_token, created_at, updated_at)VALUES
    ('admin','admin@admin.com',NULL,'$2y$12$CciyXMH64n0mJJZEE2VhnOKpW9UxEPgxuENKlU7b6vmwHUayOnJsq','QfK9zLEnHGbzswac3wGcpDcHIwZCxmlJO05zPKwgsGuoir1YPHWlKLqoF4Eo','2024-01-21 14:21:54','2024-01-21 14:21:54'),
    ('gestion','gestion@gestion.com',NULL,'$2y$12$3IxWvqToghrXs629fjXHVeOGeIXLDd3S8QmWkezaNoAI2D.XC3T3C','LEY6sRhSLywYBfxm5rjwyHV3I3BwlMMzbaY7JSUb3oqRgtv1KwvlwrQWDLS4','2024-01-21 14:22:33','2024-01-21 14:22:33'),
    ('client','client@client.com',NULL,'$2y$12$Pt5pct/bROnztbIdUYacceMKIvqlrWJr3DH29xHvMUoNqJKRB0ebC','yW48UERjPqSsa4sS77oqxGK2aVyd7I6i2BbL6oN9kvcenn0RvLoL2eVeRT2e','2024-01-21 14:23:11','2024-01-21 14:23:11');
INSERT INTO `roles` (`name`,`guard_name`,`created_at`, `updated_at`) VALUES ('Administrateur','web','2024-01-22 12:15:41','2024-01-22 12:15:41'),('Client','web','2024-01-22 12:15:41','2024-01-22 12:15:41'),('Gestion','web','2024-01-22 14:56:18','2024-01-22 14:56:18');
INSERT INTO `permissions` (`name`,`guard_name`,`created_at`, `updated_at`) VALUES ('Administrateur','web','2024-01-22 12:18:37','2024-01-22 12:18:37'),('Client','web','2024-01-22 12:18:37','2024-01-22 12:18:37'),('Gestion','web','2024-01-22 14:56:43','2024-01-22 14:56:43');
INSERT INTO `role_has_permissions` (`permission_id`,`role_id`) VALUES (1,1),(2,2),(3,3);
INSERT INTO `model_has_roles` (`role_id`,`model_type`,`model_id`) VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',3);


--SEED DES PRODUITS
INSERT INTO Category (Libelle) VALUES
  ('Machine'),
  ('Medicament');

INSERT INTO Product (libelle, price, Description, Stock, Dosage, IdCat) VALUES
                                                                            ('Paracétamol', 5.99, 'Soulage la douleur et réduit la fièvre', 100, 500, 2),
                                                                            ('Scanner Médical', 1500.00, 'Scanner haute résolution pour diagnostics médicaux', 10, NULL, 1),
                                                                            ('Ibuprofène', 7.49, 'Anti-inflammatoire non stéroïdien', 80, 400, 2),
                                                                            ('ECG Machine', 2500.00, 'Enregistre l activité électrique du cœur', 5, NULL, 1),
                                                                            ('Aspirine', 4.99, 'Réduit la douleur et l inflammation', 120, 300, 2),
                                                                            ('Imagerie par Résonance Magnétique (IRM)', 5000.00, 'Technologie avancée pour imagerie médicale', 8, NULL, 1),
                                                                            ('Ventilateur Médical', 3000.00, 'Assistance respiratoire pour les patients', 15, NULL, 1),
                                                                            ('Antibiotique', 12.99, 'Traitement des infections bactériennes', 50, NULL, 2),
                                                                            ('Tomographe Axial Computé (TAC)', 8000.00, 'Imagerie médicale avancée en coupe transversale', 7, NULL, 1),
                                                                            ('Anti-allergique', 9.99, 'Réduit les réactions allergiques', 60, NULL, 2),
                                                                            ('Échographe', 4000.00, 'Imagerie par ultrasons pour visualiser les organes internes', 12, NULL, 1),
                                                                            ('Antalgique', 6.49, 'Réduit la sensation de douleur', 90, NULL, 2),
                                                                            ('Stéthoscope électronique', 120.00, 'Amplifie les sons corporels pour l auscultation', 25, NULL, 1),
                                                                            ('Antiémétique', 8.99, 'Previent les nausees', 40, NULL, 2),
                                                                            ('IRM fonctionnelle', 6000.00, 'Imagerie cérébrale pour étudier l activité cérébrale', 6, NULL, 1),
                                                                            ('Antipyrétique', 5.49, 'Réduit la fièvre', 80, NULL, 2),
                                                                            ('Dialyseur', 3500.00, 'Appareil pour la dialyse rénale', 10, NULL, 1),
                                                                            ('Vaccin', 18.99, 'Immunisation contre les maladies infectieuses', 30, NULL, 2),
                                                                            ('Laser médical', 7000.00, 'Utilisé en chirurgie et thérapie', 8, NULL, 1),
                                                                            ('Sérum physiologique', 3.99, 'Solution saline pour divers usages médicaux', 100, NULL, 2),
                                                                            ('Chirurgie robotique', 12000.00, 'Utilisation de robots pour des interventions chirurgicales', 5, NULL, 1),
                                                                            ('Antifongique', 11.49, 'Traitement des infections fongiques', 35, NULL, 2),
                                                                            ('Endoscope', 2500.00, 'Instrument pour l exploration visuelle des cavités internes', 15, NULL, 1),
                                                                            ('Vitamine C', 7.99, 'Supplément vitaminique essentiel', 70, NULL, 2),
                                                                            ('Lit médicalisé', 2000.00, 'Lit conçu pour les patients malades ou convalescents', 20, NULL, 1),
                                                                            ('Cathéter', 15.99, 'Tube médical pour l administration de fluides', 45, NULL, 2),
                                                                            ('Oxymètre de pouls', 50.00, 'Mesure la saturation en oxygène dans le sang', 30, NULL, 1),
                                                                            ('Antiseptique', 4.49, 'Désinfectant pour les plaies et la peau', 60, NULL, 2),
                                                                            ('Paracétamol', 5.99, 'Soulage la douleur et réduit la fièvre', 100, 500, 2),
                                                                            ('Scanner Médical', 1500.00, 'Scanner haute résolution pour diagnostics médicaux', 10, NULL, 1),
                                                                            ('Ibuprofène', 7.49, 'Anti-inflammatoire non stéroïdien', 80, 400, 2),
                                                                            ('ECG Machine', 2500.00, 'Enregistre l activité électrique du cœur', 5, NULL, 1),
                                                                            ('Aspirine', 4.99, 'Réduit la douleur et l inflammation', 120, 300, 2),
                                                                            ('Imagerie par Résonance Magnétique (IRM)', 5000.00, 'Technologie avancée pour imagerie médicale', 8, NULL, 1),
                                                                            ('Ventilateur Médical', 3000.00, 'Assistance respiratoire pour les patients', 15, NULL, 1),
                                                                            ('Antibiotique', 12.99, 'Traitement des infections bactériennes', 50, NULL, 2),
                                                                            ('Tomographe Axial Computé (TAC)', 8000.00, 'Imagerie médicale avancée en coupe transversale', 7, NULL, 1),
                                                                            ('Anti-allergique', 9.99, 'Réduit les réactions allergiques', 60, NULL, 2),
                                                                            ('Échographe', 4000.00, 'Imagerie par ultrasons pour visualiser les organes internes', 12, NULL, 1),
                                                                            ('Antalgique', 6.49, 'Réduit la sensation de douleur', 90, NULL, 2),
                                                                            ('Stéthoscope électronique', 120.00, 'Amplifie les sons corporels pour l auscultation', 25, NULL, 1),
                                                                            ('Antiémétique', 8.99, 'Previent les nausees', 40, NULL, 2),
                                                                            ('IRM fonctionnelle', 6000.00, 'Imagerie cérébrale pour étudier l activité cérébrale', 6, NULL, 1),
                                                                            ('Antipyrétique', 5.49, 'Réduit la fièvre', 80, NULL, 2),
                                                                            ('Dialyseur', 3500.00, 'Appareil pour la dialyse rénale', 10, NULL, 1),
                                                                            ('Vaccin', 18.99, 'Immunisation contre les maladies infectieuses', 30, NULL, 2),
                                                                            ('Laser médical', 7000.00, 'Utilisé en chirurgie et thérapie', 8, NULL, 1),
                                                                            ('Sérum physiologique', 3.99, 'Solution saline pour divers usages médicaux', 100, NULL, 2),
                                                                            ('Chirurgie robotique', 12000.00, 'Utilisation de robots pour des interventions chirurgicales', 5, NULL, 1),
                                                                            ('Antifongique', 11.49, 'Traitement des infections fongiques', 35, NULL, 2),
                                                                            ('Endoscope', 2500.00, 'Instrument pour l exploration visuelle des cavités internes', 15, NULL, 1),
                                                                            ('Vitamine C', 7.99, 'Supplément vitaminique essentiel', 70, NULL, 2),
                                                                            ('Lit médicalisé', 2000.00, 'Lit conçu pour les patients malades ou convalescents', 20, NULL, 1),
                                                                            ('Cathéter', 15.99, 'Tube médical pour l administration de fluides', 45, NULL, 2),
                                                                            ('Oxymètre de pouls', 50.00, 'Mesure la saturation en oxygène dans le sang', 30, NULL, 1),
                                                                            ('Antiseptique', 4.49, 'Désinfectant pour les plaies et la peau', 60, NULL, 2),
                                                                            ('Scanner Portable', 1200.00, 'Scanner médical portable pour diagnostics rapides', 15, NULL, 1),
                                                                            ('Anti-hypertenseur', 9.49, 'Contrôle la pression artérielle', 40, NULL, 2),
                                                                            ('Électrocardiographe (ECG)', 1800.00, 'Mesure l activité électrique du cœur', 12, NULL, 1),
                                                                            ('Anti-diabétique', 10.99, 'Traitement du diabète', 25, NULL, 2),
                                                                            ('Moniteur de Pression Artérielle', 75.00, 'Mesure la pression artérielle', 30, NULL, 1);

--SEED DU PANIER ET DE LA LIGNE PANIER
INSERT INTO `Cart` (`created_at`, `updated_at`, `id`) VALUES
                                                          ('2024-01-31 14:03:53','2024-01-31 14:03:53',3),
                                                          ('2024-01-31 14:13:56','2024-01-31 14:13:56',3),
                                                          ('2024-01-31 14:18:53','2024-01-31 14:18:53',3),
                                                          ('2024-01-31 14:22:18','2024-01-31 14:22:18',3),
                                                          ('2024-01-31 14:22:45','2024-01-31 14:22:45',3),
                                                          ('2024-01-31 14:26:42','2024-01-31 14:26:42',3),
                                                          ('2024-01-31 14:30:17','2024-01-31 14:30:17',3),
                                                          ('2024-02-02 11:23:08','2024-02-02 11:23:08',3),
                                                          ('2024-02-02 11:41:37','2024-02-02 11:41:37',3),
                                                          ('2024-02-02 11:52:23','2024-02-02 11:52:23',3),
                                                          ('2024-02-02 11:58:56','2024-02-02 11:58:56',3),
                                                          ('2024-02-02 12:10:08','2024-02-02 12:10:08',3),
                                                          ('2024-02-02 12:36:51','2024-02-02 12:36:51',3),
                                                          ('2024-02-02 14:46:39','2024-02-02 14:46:39',3),
                                                          ('2024-02-02 14:51:19','2024-02-02 14:51:19',3),
                                                          ('2024-02-05 13:27:23','2024-02-05 13:27:23',3),
                                                          ('2024-02-05 13:28:03','2024-02-05 13:28:03',3),
                                                          ('2024-02-07 12:01:37','2024-02-07 12:01:37',3),
                                                          ('2024-02-07 14:57:42','2024-02-07 14:57:42',3);

--SEED DE LA LIGNE PANIER
INSERT INTO `CartLine` (`Quantity`, `Price`, `IdCart`,`IdProduct`) VALUES (1,0,6,21),(1,0,7,22),(1,0,8,23),(1,0,9,24),(1,0,10,25),(1,0,11,26),(1,0,12,27),(20,0,13,28),(1,0,14,29),(1,0,15,30),(10,0,16,31),(1,0,17,32),(1,0,18,33),(11,0,19,34);
