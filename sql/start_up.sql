INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) 
VALUES 
(NULL, 'Student', NULL, NULL), 
(NULL, 'Teacher', NULL, NULL), 
(NULL, 'Department head', NULL, NULL);

INSERT INTO `departments` (`id`, `user_id`, `collage_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Software engineering', NULL, NULL);


INSERT INTO `collages` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Technology', NULL, NULL);