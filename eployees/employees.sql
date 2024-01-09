CREATE TABLE IF NOT EXISTS `employees` (
                                           `id` int(11) NOT NULL AUTO_INCREMENT,
                                           `name` varchar(100) NOT NULL,
                                           `address` VARCHAR(255) NOT NULL,
                                           `salary` INT(10) NOT NULL,
                                           PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `employees` (`id`, `name`, `address`, `salary`) VALUES
                                                                (1, 'NameA', 'AddressA', 5000),
                                                                (2, 'NameB', 'AddressB', 5000),
                                                                (3, 'NameC', 'AddressC', 5000);