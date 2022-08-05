<?php


/**
 * Base static class for performing query and update operations on the 'agent_banquier' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAgentBanquierPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'agent_banquier';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAgentBanquier';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAgentBanquierTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 24;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 24;

    /** the column name for the id field */
    const ID = 'agent_banquier.id';

    /** the column name for the username field */
    const USERNAME = 'agent_banquier.username';

    /** the column name for the username_canonical field */
    const USERNAME_CANONICAL = 'agent_banquier.username_canonical';

    /** the column name for the email field */
    const EMAIL = 'agent_banquier.email';

    /** the column name for the email_canonical field */
    const EMAIL_CANONICAL = 'agent_banquier.email_canonical';

    /** the column name for the enabled field */
    const ENABLED = 'agent_banquier.enabled';

    /** the column name for the salt field */
    const SALT = 'agent_banquier.salt';

    /** the column name for the password field */
    const PASSWORD = 'agent_banquier.password';

    /** the column name for the last_login field */
    const LAST_LOGIN = 'agent_banquier.last_login';

    /** the column name for the confirmation_token field */
    const CONFIRMATION_TOKEN = 'agent_banquier.confirmation_token';

    /** the column name for the password_requested_at field */
    const PASSWORD_REQUESTED_AT = 'agent_banquier.password_requested_at';

    /** the column name for the roles field */
    const ROLES = 'agent_banquier.roles';

    /** the column name for the id_banque field */
    const ID_BANQUE = 'agent_banquier.id_banque';

    /** the column name for the id_profil field */
    const ID_PROFIL = 'agent_banquier.id_profil';

    /** the column name for the created_at field */
    const CREATED_AT = 'agent_banquier.created_at';

    /** the column name for the updated_at field */
    const UPDATED_AT = 'agent_banquier.updated_at';

    /** the column name for the code_ville field */
    const CODE_VILLE = 'agent_banquier.code_ville';

    /** the column name for the code_agence field */
    const CODE_AGENCE = 'agent_banquier.code_agence';

    /** the column name for the id_ref_ville field */
    const ID_REF_VILLE = 'agent_banquier.id_ref_ville';

    /** the column name for the nom field */
    const NOM = 'agent_banquier.nom';

    /** the column name for the prenom field */
    const PRENOM = 'agent_banquier.prenom';

    /** the column name for the telephone field */
    const TELEPHONE = 'agent_banquier.telephone';

    /** the column name for the deleted field */
    const DELETED = 'agent_banquier.deleted';

    /** the column name for the notification field */
    const NOTIFICATION = 'agent_banquier.notification';

    /** The enumerated values for the notification field */
    const NOTIFICATION_0 = '0';
    const NOTIFICATION_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAgentBanquier objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAgentBanquier[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAgentBanquierPeer::$fieldNames[CommonAgentBanquierPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Username', 'UsernameCanonical', 'Email', 'EmailCanonical', 'Enabled', 'Salt', 'Password', 'LastLogin', 'ConfirmationToken', 'PasswordRequestedAt', 'Roles', 'IdBanque', 'IdProfil', 'CreatedAt', 'UpdatedAt', 'CodeVille', 'CodeAgence', 'IdRefVille', 'Nom', 'Prenom', 'Telephone', 'Deleted', 'Notification', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'username', 'usernameCanonical', 'email', 'emailCanonical', 'enabled', 'salt', 'password', 'lastLogin', 'confirmationToken', 'passwordRequestedAt', 'roles', 'idBanque', 'idProfil', 'createdAt', 'updatedAt', 'codeVille', 'codeAgence', 'idRefVille', 'nom', 'prenom', 'telephone', 'deleted', 'notification', ),
        BasePeer::TYPE_COLNAME => array (CommonAgentBanquierPeer::ID, CommonAgentBanquierPeer::USERNAME, CommonAgentBanquierPeer::USERNAME_CANONICAL, CommonAgentBanquierPeer::EMAIL, CommonAgentBanquierPeer::EMAIL_CANONICAL, CommonAgentBanquierPeer::ENABLED, CommonAgentBanquierPeer::SALT, CommonAgentBanquierPeer::PASSWORD, CommonAgentBanquierPeer::LAST_LOGIN, CommonAgentBanquierPeer::CONFIRMATION_TOKEN, CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT, CommonAgentBanquierPeer::ROLES, CommonAgentBanquierPeer::ID_BANQUE, CommonAgentBanquierPeer::ID_PROFIL, CommonAgentBanquierPeer::CREATED_AT, CommonAgentBanquierPeer::UPDATED_AT, CommonAgentBanquierPeer::CODE_VILLE, CommonAgentBanquierPeer::CODE_AGENCE, CommonAgentBanquierPeer::ID_REF_VILLE, CommonAgentBanquierPeer::NOM, CommonAgentBanquierPeer::PRENOM, CommonAgentBanquierPeer::TELEPHONE, CommonAgentBanquierPeer::DELETED, CommonAgentBanquierPeer::NOTIFICATION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'USERNAME', 'USERNAME_CANONICAL', 'EMAIL', 'EMAIL_CANONICAL', 'ENABLED', 'SALT', 'PASSWORD', 'LAST_LOGIN', 'CONFIRMATION_TOKEN', 'PASSWORD_REQUESTED_AT', 'ROLES', 'ID_BANQUE', 'ID_PROFIL', 'CREATED_AT', 'UPDATED_AT', 'CODE_VILLE', 'CODE_AGENCE', 'ID_REF_VILLE', 'NOM', 'PRENOM', 'TELEPHONE', 'DELETED', 'NOTIFICATION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'username', 'username_canonical', 'email', 'email_canonical', 'enabled', 'salt', 'password', 'last_login', 'confirmation_token', 'password_requested_at', 'roles', 'id_banque', 'id_profil', 'created_at', 'updated_at', 'code_ville', 'code_agence', 'id_ref_ville', 'nom', 'prenom', 'telephone', 'deleted', 'notification', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAgentBanquierPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Username' => 1, 'UsernameCanonical' => 2, 'Email' => 3, 'EmailCanonical' => 4, 'Enabled' => 5, 'Salt' => 6, 'Password' => 7, 'LastLogin' => 8, 'ConfirmationToken' => 9, 'PasswordRequestedAt' => 10, 'Roles' => 11, 'IdBanque' => 12, 'IdProfil' => 13, 'CreatedAt' => 14, 'UpdatedAt' => 15, 'CodeVille' => 16, 'CodeAgence' => 17, 'IdRefVille' => 18, 'Nom' => 19, 'Prenom' => 20, 'Telephone' => 21, 'Deleted' => 22, 'Notification' => 23, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'username' => 1, 'usernameCanonical' => 2, 'email' => 3, 'emailCanonical' => 4, 'enabled' => 5, 'salt' => 6, 'password' => 7, 'lastLogin' => 8, 'confirmationToken' => 9, 'passwordRequestedAt' => 10, 'roles' => 11, 'idBanque' => 12, 'idProfil' => 13, 'createdAt' => 14, 'updatedAt' => 15, 'codeVille' => 16, 'codeAgence' => 17, 'idRefVille' => 18, 'nom' => 19, 'prenom' => 20, 'telephone' => 21, 'deleted' => 22, 'notification' => 23, ),
        BasePeer::TYPE_COLNAME => array (CommonAgentBanquierPeer::ID => 0, CommonAgentBanquierPeer::USERNAME => 1, CommonAgentBanquierPeer::USERNAME_CANONICAL => 2, CommonAgentBanquierPeer::EMAIL => 3, CommonAgentBanquierPeer::EMAIL_CANONICAL => 4, CommonAgentBanquierPeer::ENABLED => 5, CommonAgentBanquierPeer::SALT => 6, CommonAgentBanquierPeer::PASSWORD => 7, CommonAgentBanquierPeer::LAST_LOGIN => 8, CommonAgentBanquierPeer::CONFIRMATION_TOKEN => 9, CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT => 10, CommonAgentBanquierPeer::ROLES => 11, CommonAgentBanquierPeer::ID_BANQUE => 12, CommonAgentBanquierPeer::ID_PROFIL => 13, CommonAgentBanquierPeer::CREATED_AT => 14, CommonAgentBanquierPeer::UPDATED_AT => 15, CommonAgentBanquierPeer::CODE_VILLE => 16, CommonAgentBanquierPeer::CODE_AGENCE => 17, CommonAgentBanquierPeer::ID_REF_VILLE => 18, CommonAgentBanquierPeer::NOM => 19, CommonAgentBanquierPeer::PRENOM => 20, CommonAgentBanquierPeer::TELEPHONE => 21, CommonAgentBanquierPeer::DELETED => 22, CommonAgentBanquierPeer::NOTIFICATION => 23, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'USERNAME' => 1, 'USERNAME_CANONICAL' => 2, 'EMAIL' => 3, 'EMAIL_CANONICAL' => 4, 'ENABLED' => 5, 'SALT' => 6, 'PASSWORD' => 7, 'LAST_LOGIN' => 8, 'CONFIRMATION_TOKEN' => 9, 'PASSWORD_REQUESTED_AT' => 10, 'ROLES' => 11, 'ID_BANQUE' => 12, 'ID_PROFIL' => 13, 'CREATED_AT' => 14, 'UPDATED_AT' => 15, 'CODE_VILLE' => 16, 'CODE_AGENCE' => 17, 'ID_REF_VILLE' => 18, 'NOM' => 19, 'PRENOM' => 20, 'TELEPHONE' => 21, 'DELETED' => 22, 'NOTIFICATION' => 23, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'username' => 1, 'username_canonical' => 2, 'email' => 3, 'email_canonical' => 4, 'enabled' => 5, 'salt' => 6, 'password' => 7, 'last_login' => 8, 'confirmation_token' => 9, 'password_requested_at' => 10, 'roles' => 11, 'id_banque' => 12, 'id_profil' => 13, 'created_at' => 14, 'updated_at' => 15, 'code_ville' => 16, 'code_agence' => 17, 'id_ref_ville' => 18, 'nom' => 19, 'prenom' => 20, 'telephone' => 21, 'deleted' => 22, 'notification' => 23, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAgentBanquierPeer::NOTIFICATION => array(
            CommonAgentBanquierPeer::NOTIFICATION_0,
            CommonAgentBanquierPeer::NOTIFICATION_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonAgentBanquierPeer::getFieldNames($toType);
        $key = isset(CommonAgentBanquierPeer::$fieldKeys[$fromType][$name]) ? CommonAgentBanquierPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAgentBanquierPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonAgentBanquierPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAgentBanquierPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAgentBanquierPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonAgentBanquierPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonAgentBanquierPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonAgentBanquierPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAgentBanquierPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ID);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::USERNAME);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::USERNAME_CANONICAL);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::EMAIL);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::EMAIL_CANONICAL);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ENABLED);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::SALT);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::PASSWORD);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::LAST_LOGIN);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::CONFIRMATION_TOKEN);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ROLES);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ID_BANQUE);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ID_PROFIL);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::CREATED_AT);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::UPDATED_AT);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::CODE_VILLE);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::CODE_AGENCE);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::ID_REF_VILLE);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::NOM);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::PRENOM);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::DELETED);
            $criteria->addSelectColumn(CommonAgentBanquierPeer::NOTIFICATION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.username');
            $criteria->addSelectColumn($alias . '.username_canonical');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.email_canonical');
            $criteria->addSelectColumn($alias . '.enabled');
            $criteria->addSelectColumn($alias . '.salt');
            $criteria->addSelectColumn($alias . '.password');
            $criteria->addSelectColumn($alias . '.last_login');
            $criteria->addSelectColumn($alias . '.confirmation_token');
            $criteria->addSelectColumn($alias . '.password_requested_at');
            $criteria->addSelectColumn($alias . '.roles');
            $criteria->addSelectColumn($alias . '.id_banque');
            $criteria->addSelectColumn($alias . '.id_profil');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
            $criteria->addSelectColumn($alias . '.code_ville');
            $criteria->addSelectColumn($alias . '.code_agence');
            $criteria->addSelectColumn($alias . '.id_ref_ville');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.deleted');
            $criteria->addSelectColumn($alias . '.notification');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAgentBanquierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAgentBanquierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonAgentBanquier
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAgentBanquierPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonAgentBanquierPeer::populateObjects(CommonAgentBanquierPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAgentBanquierPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonAgentBanquier $obj A CommonAgentBanquier object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonAgentBanquierPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonAgentBanquier object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAgentBanquier) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAgentBanquier object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAgentBanquierPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAgentBanquier Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAgentBanquierPeer::$instances[$key])) {
                return CommonAgentBanquierPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonAgentBanquierPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAgentBanquierPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to agent_banquier
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonAgentBanquierPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAgentBanquierPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAgentBanquierPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonAgentBanquier object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAgentBanquierPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAgentBanquierPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAgentBanquierPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonCautionProfil table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonCautionProfil(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAgentBanquierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAgentBanquierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAgentBanquierPeer::ID_PROFIL, CommonCautionProfilPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CommonAgentBanquier objects pre-filled with their CommonCautionProfil objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAgentBanquier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonCautionProfil(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);
        }

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol = CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;
        CommonCautionProfilPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAgentBanquierPeer::ID_PROFIL, CommonCautionProfilPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAgentBanquierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAgentBanquierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAgentBanquierPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonCautionProfilPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonCautionProfilPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonCautionProfilPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonCautionProfilPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAgentBanquier) to $obj2 (CommonCautionProfil)
                $obj2->addCommonAgentBanquier($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAgentBanquierPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAgentBanquierPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAgentBanquierPeer::ID_PROFIL, CommonCautionProfilPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of CommonAgentBanquier objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAgentBanquier objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);
        }

        CommonAgentBanquierPeer::addSelectColumns($criteria);
        $startcol2 = CommonAgentBanquierPeer::NUM_HYDRATE_COLUMNS;

        CommonCautionProfilPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonCautionProfilPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAgentBanquierPeer::ID_PROFIL, CommonCautionProfilPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAgentBanquierPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAgentBanquierPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAgentBanquierPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAgentBanquierPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonCautionProfil rows

            $key2 = CommonCautionProfilPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonCautionProfilPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonCautionProfilPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonCautionProfilPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonAgentBanquier) to the collection in $obj2 (CommonCautionProfil)
                $obj2->addCommonAgentBanquier($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonAgentBanquierPeer::DATABASE_NAME)->getTable(CommonAgentBanquierPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAgentBanquierPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAgentBanquierPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAgentBanquierTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonAgentBanquierPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAgentBanquier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAgentBanquier object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAgentBanquier object
        }

        if ($criteria->containsKey(CommonAgentBanquierPeer::ID) && $criteria->keyContainsValue(CommonAgentBanquierPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAgentBanquierPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonAgentBanquier or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAgentBanquier object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAgentBanquierPeer::ID);
            $value = $criteria->remove(CommonAgentBanquierPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAgentBanquierPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAgentBanquierPeer::TABLE_NAME);
            }

        } else { // $values is CommonAgentBanquier object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the agent_banquier table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAgentBanquierPeer::TABLE_NAME, $con, CommonAgentBanquierPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAgentBanquierPeer::clearInstancePool();
            CommonAgentBanquierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAgentBanquier or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAgentBanquier object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAgentBanquierPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAgentBanquier) { // it's a model object
            // invalidate the cache for this single object
            CommonAgentBanquierPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);
            $criteria->add(CommonAgentBanquierPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonAgentBanquierPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAgentBanquierPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAgentBanquierPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAgentBanquier object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAgentBanquier $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAgentBanquierPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAgentBanquierPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonAgentBanquierPeer::DATABASE_NAME, CommonAgentBanquierPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonAgentBanquier
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonAgentBanquierPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);
        $criteria->add(CommonAgentBanquierPeer::ID, $pk);

        $v = CommonAgentBanquierPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonAgentBanquier[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonAgentBanquierPeer::DATABASE_NAME);
            $criteria->add(CommonAgentBanquierPeer::ID, $pks, Criteria::IN);
            $objs = CommonAgentBanquierPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonAgentBanquierPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAgentBanquierPeer::buildTableMap();

