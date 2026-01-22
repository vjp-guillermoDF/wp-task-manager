<?php
/**
 * Plugin Name: WP Task Manager
 * Plugin URI: https://github.com/tuusuario/wp-task-manager
 * Description: Plugin sencillo para practicar desarrollo backend en WordPress.
 * Version: 1.0.0
 * Author: Tu Nombre / Equipo
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Evita acceso directo al archivo
}
// Activación del plugin
function wp_task_manager_activate() {
    // Aquí podemos crear tablas en la base de datos
    include_once plugin_dir_path( __FILE__ ) . 'includes/db.php';
    wp_task_manager_create_table();
}

// Desactivación del plugin
function wp_task_manager_deactivate() {
    // Por ahora no haremos nada, pero aquí podríamos limpiar opciones
}
