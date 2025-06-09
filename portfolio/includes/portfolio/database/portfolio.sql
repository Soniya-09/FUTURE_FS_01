-- Create database
CREATE DATABASE IF NOT EXISTS portfolio_db;
USE portfolio_db;

-- Create projects table
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    image_url VARCHAR(255),
    github_url VARCHAR(255),
    live_url VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create skills table
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create messages table
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample skills
INSERT INTO skills (name, description, icon) VALUES
('HTML5', 'Semantic markup and modern web structure', 'fab fa-html5'),
('CSS3', 'Responsive design and animations', 'fab fa-css3-alt'),
('JavaScript', 'Dynamic web applications and interactivity', 'fab fa-js'),
('PHP', 'Server-side scripting and web development', 'fab fa-php'),
('MySQL', 'Database management and optimization', 'fas fa-database'),
('Git', 'Version control and collaboration', 'fab fa-git-alt');

-- Insert sample projects
INSERT INTO projects (title, description, image_url, github_url, live_url) VALUES
('E-commerce Website', 'A full-featured online store with payment integration', 'assets/projects/ecommerce.jpg', 'https://github.com/yourusername/ecommerce', 'https://ecommerce-demo.com'),
('Portfolio Website', 'Personal portfolio website with modern design', 'assets/projects/portfolio.jpg', 'https://github.com/yourusername/portfolio', 'https://portfolio-demo.com'),
('Task Management App', 'A collaborative task management application', 'assets/projects/taskmanager.jpg', 'https://github.com/yourusername/taskmanager', 'https://taskmanager-demo.com'); 