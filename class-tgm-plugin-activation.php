/**
					 * Sets install skin strings for each individual plugin.
					 *
					 * Checks to see if the automatic activation flag is set and uses the
					 * the proper strings accordingly.
					 *
					 * @since 2.2.0
					 */
					public function add_strings() {
						if ( 'update' === $this->options['install_type'] ) {
							parent::add_strings();
							/* translators: 1: plugin name, 2: action number 3: total number of actions. */
							$this->upgrader->strings['skin_before_update_header'] = __( 'Updating Plugin %1$s (%2$d/%3$d)', 'tgmpa' );
						} else {
							/* translators: 1: plugin name, 2: error message. */
							$this->upgrader->strings['skin_update_failed_error'] = __( 'An error occurred while installing %1$s: <strong>%2$s</strong>.', 'tgmpa' );
							/* translators: 1: plugin name. */
							$this->upgrader->strings['skin_update_failed'] = __( 'The installation of %1$s failed.', 'tgmpa' );

							if ( $this->tgmpa->is_automatic ) {
								// Automatic activation strings.
								$this->upgrader->strings['skin_upgrade_start'] = __( 'The installation and activation process is starting. This process may take a while on some hosts, so please be patient.', 'tgmpa' );
								/* translators: 1: plugin name. */
								$this->upgrader->strings['skin_update_successful'] = __( '%1$s done.' );
								$this->upgrader->strings['skin_upgrade_end']       = __( 'All installations and activations have been completed.', 'tgmpa' );
								/* translators: 1: plugin name, 2: action number 3: total number of actions. */
								$this->upgrader->strings['skin_before_update_header'] = __( 'Installing and Activating Plugin %1$s (%2$d/%3$d)', 'tgmpa' );
							} else {
								// Default installation strings.
								$this->upgrader->strings['skin_upgrade_start'] = __( 'The installation process is starting. This process may take a while on some hosts, so please be patient.', 'tgmpa' );
								/* translators: 1: plugin name. */
								$this->upgrader->strings['skin_update_successful'] = __( '%1$s done.' );
								$this->upgrader->strings['skin_upgrade_end']       = __( 'All installations have been completed.', 'tgmpa' );
								/* translators: 1: plugin name, 2: action number 3: total number of actions. */
								$this->upgrader->strings['skin_before_update_header'] = __( 'Installing Plugin %1$s (%2$d/%3$d)', 'tgmpa' );
							}
						}
					}