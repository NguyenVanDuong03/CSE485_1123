-- Tạo bảng users
CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME
);

-- Thêm 3 bản ghi vào bảng users
INSERT INTO users (id, name, email, password, created_at, updated_at)
VALUES
    (1, 'User1', 'user1@example.com', 'password1', GETDATE(), GETDATE()),
    (2, 'User2', 'user2@example.com', 'password2', GETDATE(), GETDATE()),
    (3, 'User3', 'user3@example.com', 'password3', GETDATE(), GETDATE());

-- Tạo bảng courses
CREATE TABLE courses (
    id INT PRIMARY KEY,
    title VARCHAR(255),
    description TEXT,
    created_at DATETIME,
    updated_at DATETIME
);

-- Thêm 3 bản ghi vào bảng courses
INSERT INTO courses (id, title, description, created_at, updated_at)
VALUES
    (1, 'Course1', 'Description for Course 1', GETDATE(), GETDATE()),
    (2, 'Course2', 'Description for Course 2', GETDATE(), GETDATE()),
    (3, 'Course3', 'Description for Course 3', GETDATE(), GETDATE());

-- Tạo bảng course_user
CREATE TABLE course_user (
    course_id INT,
    user_id INT,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (course_id) REFERENCES courses(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

-- Thêm 3 bản ghi vào bảng course_user
INSERT INTO course_user (course_id, user_id, created_at, updated_at)
VALUES
    (1, 1, GETDATE(), GETDATE()),
    (2, 2, GETDATE(), GETDATE()),
    (3, 3, GETDATE(), GETDATE());

-- Tạo bảng lessons
CREATE TABLE lessons (
    id INT PRIMARY KEY,
    course_id INT,
    title VARCHAR(255),
    description TEXT,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

-- Thêm 3 bản ghi vào bảng lessons
INSERT INTO lessons (id, course_id, title, description, created_at, updated_at)
VALUES
    (1, 1, 'Lesson 1', 'Description for Lesson 1', GETDATE(), GETDATE()),
    (2, 2, 'Lesson 2', 'Description for Lesson 2', GETDATE(), GETDATE()),
    (3, 3, 'Lesson 3', 'Description for Lesson 3', GETDATE(), GETDATE());

-- Tạo bảng materials
CREATE TABLE materials (
    id INT PRIMARY KEY,
    lesson_id INT,
    title VARCHAR(255),
    file_path VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (lesson_id) REFERENCES lessons(id)
);

-- Thêm 3 bản ghi vào bảng materials
INSERT INTO materials (id, lesson_id, title, file_path, created_at, updated_at)
VALUES
    (1, 1, 'Material 1', 'path/to/material1.pdf', GETDATE(), GETDATE()),
    (2, 2, 'Material 2', 'path/to/material2.docx', GETDATE(), GETDATE()),
    (3, 3, 'Material 3', 'path/to/material3.txt', GETDATE(), GETDATE());

-- Tạo bảng quizzes
CREATE TABLE quizzes (
    id INT PRIMARY KEY,
    lesson_id INT,
    title VARCHAR(255),
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (lesson_id) REFERENCES lessons(id)
);

-- Thêm 3 bản ghi vào bảng quizzes
INSERT INTO quizzes (id, lesson_id, title, created_at, updated_at)
VALUES
    (1, 1, 'Quiz 1', GETDATE(), GETDATE()),
    (2, 2, 'Quiz 2', GETDATE(), GETDATE()),
    (3, 3, 'Quiz 3', GETDATE(), GETDATE());

-- Tạo bảng questions
CREATE TABLE questions (
    id INT PRIMARY KEY,
    quiz_id INT,
    question TEXT,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (quiz_id) REFERENCES quizzes(id)
);

-- Thêm 3 bản ghi vào bảng questions
INSERT INTO questions (id, quiz_id, question, created_at, updated_at)
VALUES
    (1, 1, 'Question 1?', GETDATE(), GETDATE()),
    (2, 2, 'Question 2?', GETDATE(), GETDATE()),
    (3, 3, 'Question 3?', GETDATE(), GETDATE());

-- Tạo bảng options
CREATE TABLE options (
    id INT PRIMARY KEY,
    question_id INT,
    option VARCHAR(255),
    is_correct BIT,
    created_at DATETIME,
    updated_at DATETIME,
    FOREIGN KEY (question_id) REFERENCES questions(id)
);

-- Thêm 3 bản ghi vào bảng options
INSERT INTO options (id, question_id, option, is_correct, created_at, updated_at)
VALUES
    (1, 1, 'Option 1', 1, GETDATE(), GETDATE()),
    (2, 1, 'Option 2', 0, GETDATE(), GETDATE()),
    (3, 1, 'Option 3', 0, GETDATE(), GETDATE());
