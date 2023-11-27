CREATE DATABASE peoplepertask;
CREATE TABLE IF NOT EXISTS Users (
    UserId INT PRIMARY KEY,
    UserName VARCHAR(255),
    ProfilPassword VARCHAR(255),
    email VARCHAR(255),
    Other VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL,
    edited_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by VARCHAR(255) DEFAULT 'bwissal',
    deleted_by VARCHAR(255) DEFAULT 'bwissal',
    edited_by VARCHAR(255) DEFAULT 'Aymane'
);

CREATE TABLE IF NOT EXISTS categories (
    categorieId INT PRIMARY KEY,
    CategorieName VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS sousCategories (
    sousCategorieId INT PRIMARY KEY,
    sousCategorieName VARCHAR(255),
    categorieId INT,
    FOREIGN KEY (categorieId) REFERENCES categories(categorieId)
);

CREATE TABLE IF NOT EXISTS projets (
    ProjetId INT PRIMARY KEY,
    projetTitle VARCHAR(255),
    projetDescription VARCHAR(255),
    categorieId INT,
    FOREIGN KEY (categorieId) REFERENCES categories(categorieId),
    sousCategorieId INT,
    FOREIGN KEY (sousCategorieId) REFERENCES sousCategories(sousCategorieId),
    UserId INT,
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    deleted_at TIMESTAMP DEFAULT NULL,
    edited_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created_by VARCHAR(255) DEFAULT 'bwissal',
    deleted_by VARCHAR(255) DEFAULT 'bwissal',
    edited_by VARCHAR(255) DEFAULT 'Aymane'
);

CREATE TABLE IF NOT EXISTS freelances (
    freelanceID INT PRIMARY KEY,
    freelanceName VARCHAR(255),
    competences VARCHAR(255),
    UserId INT,
    FOREIGN KEY (UserId) REFERENCES Users(UserId)
);

CREATE TABLE IF NOT EXISTS offres (
    offreId INT PRIMARY KEY,
    Amount INT,
    Deadline INT
);

CREATE TABLE IF NOT EXISTS Testimonials (
    Testimonial_ID INT PRIMARY KEY,
    Comment TEXT
);

-- INSERT INTO categories VALUES (1,'Programming'),(2,'Graphic Design'),(3,'Writing'),(4,'Data Entry'),(5,'Translation');

-- INSERT INTO freelances VALUES (1,'Web Developer Freelance','fr',1),(2,'Graphic Designer Freelance','ar',2),(3,'Copywriter Freelance','fr',3),(4,'Data Analyst Freelance','ar',4),(5,'Translator Freelance','fr',5);

-- INSERT INTO projets VALUES (1,'E-commerce Website Development','Build a fully functional e-commerce website.',1,1,1),(2,'Company Logo Redesign','Redesign the company logo for a modern look.',2,2,2),(3,'Content Marketing Strategy','Develop a content marketing strategy for the next quarter.',3,3,3),(4,'Data Visualization Dashboard','Create a dashboard for visualizing company data.',4,4,4),(5,'Translate Product Descriptions','Translate product descriptions into multiple languages.',5,5,5);

-- INSERT INTO souscategories VALUES (1,'Web Development',1),(2,'Logo Design',2),(3,'Copywriting',3),(4,'Data Analysis',4),(5,'Language Translation',5);

-- INSERT INTO users VALUES (1,'khalid ','hashed_password_1','khalid.waheli@email.com','weird'),(2,'Abdeljlil','hashed_password_2','abdo.sno7i@email.com','weird'),(3,'hamza','hashed_password_3','hamza.elazzhar@email.com','weird'),(4,'zakaria','hashed_password_4','zakaria.elkoh@email.com','weird'),(5,'fati','hashed_password_5','fatima.ezzahra@email.com','cute');

-- INSERT INTO testimonials VALUES (1,'Great freelancer! Delivered the project ahead of schedule.'),(2,'Excellent work, very professional and reliable.'),(3,'Impressed with the quality of service. Will hire again.'),(4,'Quick and efficient. Highly recommended.'),(5,'Good communication and attention to detail.');

-- INSERT INTO offres VALUES (1,500,7),(2,300,5),(3,800,10),(4,400,6),(5,600,8);