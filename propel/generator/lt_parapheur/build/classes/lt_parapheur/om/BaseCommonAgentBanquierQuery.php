<?php


/**
 * Base class that represents a query for the 'agent_banquier' table.
 *
 * 
 *
 * @method CommonAgentBanquierQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAgentBanquierQuery orderByUsername($order = Criteria::ASC) Order by the username column
 * @method CommonAgentBanquierQuery orderByUsernameCanonical($order = Criteria::ASC) Order by the username_canonical column
 * @method CommonAgentBanquierQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonAgentBanquierQuery orderByEmailCanonical($order = Criteria::ASC) Order by the email_canonical column
 * @method CommonAgentBanquierQuery orderByEnabled($order = Criteria::ASC) Order by the enabled column
 * @method CommonAgentBanquierQuery orderBySalt($order = Criteria::ASC) Order by the salt column
 * @method CommonAgentBanquierQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method CommonAgentBanquierQuery orderByLastLogin($order = Criteria::ASC) Order by the last_login column
 * @method CommonAgentBanquierQuery orderByConfirmationToken($order = Criteria::ASC) Order by the confirmation_token column
 * @method CommonAgentBanquierQuery orderByPasswordRequestedAt($order = Criteria::ASC) Order by the password_requested_at column
 * @method CommonAgentBanquierQuery orderByRoles($order = Criteria::ASC) Order by the roles column
 * @method CommonAgentBanquierQuery orderByIdBanque($order = Criteria::ASC) Order by the id_banque column
 * @method CommonAgentBanquierQuery orderByIdProfil($order = Criteria::ASC) Order by the id_profil column
 * @method CommonAgentBanquierQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method CommonAgentBanquierQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method CommonAgentBanquierQuery orderByCodeVille($order = Criteria::ASC) Order by the code_ville column
 * @method CommonAgentBanquierQuery orderByCodeAgence($order = Criteria::ASC) Order by the code_agence column
 * @method CommonAgentBanquierQuery orderByIdRefVille($order = Criteria::ASC) Order by the id_ref_ville column
 * @method CommonAgentBanquierQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonAgentBanquierQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonAgentBanquierQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonAgentBanquierQuery orderByDeleted($order = Criteria::ASC) Order by the deleted column
 * @method CommonAgentBanquierQuery orderByNotification($order = Criteria::ASC) Order by the notification column
 *
 * @method CommonAgentBanquierQuery groupById() Group by the id column
 * @method CommonAgentBanquierQuery groupByUsername() Group by the username column
 * @method CommonAgentBanquierQuery groupByUsernameCanonical() Group by the username_canonical column
 * @method CommonAgentBanquierQuery groupByEmail() Group by the email column
 * @method CommonAgentBanquierQuery groupByEmailCanonical() Group by the email_canonical column
 * @method CommonAgentBanquierQuery groupByEnabled() Group by the enabled column
 * @method CommonAgentBanquierQuery groupBySalt() Group by the salt column
 * @method CommonAgentBanquierQuery groupByPassword() Group by the password column
 * @method CommonAgentBanquierQuery groupByLastLogin() Group by the last_login column
 * @method CommonAgentBanquierQuery groupByConfirmationToken() Group by the confirmation_token column
 * @method CommonAgentBanquierQuery groupByPasswordRequestedAt() Group by the password_requested_at column
 * @method CommonAgentBanquierQuery groupByRoles() Group by the roles column
 * @method CommonAgentBanquierQuery groupByIdBanque() Group by the id_banque column
 * @method CommonAgentBanquierQuery groupByIdProfil() Group by the id_profil column
 * @method CommonAgentBanquierQuery groupByCreatedAt() Group by the created_at column
 * @method CommonAgentBanquierQuery groupByUpdatedAt() Group by the updated_at column
 * @method CommonAgentBanquierQuery groupByCodeVille() Group by the code_ville column
 * @method CommonAgentBanquierQuery groupByCodeAgence() Group by the code_agence column
 * @method CommonAgentBanquierQuery groupByIdRefVille() Group by the id_ref_ville column
 * @method CommonAgentBanquierQuery groupByNom() Group by the nom column
 * @method CommonAgentBanquierQuery groupByPrenom() Group by the prenom column
 * @method CommonAgentBanquierQuery groupByTelephone() Group by the telephone column
 * @method CommonAgentBanquierQuery groupByDeleted() Group by the deleted column
 * @method CommonAgentBanquierQuery groupByNotification() Group by the notification column
 *
 * @method CommonAgentBanquierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAgentBanquierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAgentBanquierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionProfil($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionProfil relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionProfil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionProfil relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionProfil($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionProfil relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionDemandeRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierRejet relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionDemandeRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierRejet relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionDemandeRelatedByIdAgentBanquierRejet($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierRejet relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionDemandeRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierValidation relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionDemandeRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierValidation relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionDemandeRelatedByIdAgentBanquierValidation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierValidation relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentPriseEnCharge relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentPriseEnCharge relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentPriseEnCharge relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionDemandeRelatedByIdSignataire1($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire1 relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionDemandeRelatedByIdSignataire1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire1 relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionDemandeRelatedByIdSignataire1($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire1 relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionDemandeRelatedByIdSignataire2($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire2 relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionDemandeRelatedByIdSignataire2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire2 relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionDemandeRelatedByIdSignataire2($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire2 relation
 *
 * @method CommonAgentBanquierQuery leftJoinCommonCautionSignataireDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionSignataireDemande relation
 * @method CommonAgentBanquierQuery rightJoinCommonCautionSignataireDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionSignataireDemande relation
 * @method CommonAgentBanquierQuery innerJoinCommonCautionSignataireDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionSignataireDemande relation
 *
 * @method CommonAgentBanquier findOne(PropelPDO $con = null) Return the first CommonAgentBanquier matching the query
 * @method CommonAgentBanquier findOneOrCreate(PropelPDO $con = null) Return the first CommonAgentBanquier matching the query, or a new CommonAgentBanquier object populated from the query conditions when no match is found
 *
 * @method CommonAgentBanquier findOneByUsername(string $username) Return the first CommonAgentBanquier filtered by the username column
 * @method CommonAgentBanquier findOneByUsernameCanonical(string $username_canonical) Return the first CommonAgentBanquier filtered by the username_canonical column
 * @method CommonAgentBanquier findOneByEmail(string $email) Return the first CommonAgentBanquier filtered by the email column
 * @method CommonAgentBanquier findOneByEmailCanonical(string $email_canonical) Return the first CommonAgentBanquier filtered by the email_canonical column
 * @method CommonAgentBanquier findOneByEnabled(boolean $enabled) Return the first CommonAgentBanquier filtered by the enabled column
 * @method CommonAgentBanquier findOneBySalt(string $salt) Return the first CommonAgentBanquier filtered by the salt column
 * @method CommonAgentBanquier findOneByPassword(string $password) Return the first CommonAgentBanquier filtered by the password column
 * @method CommonAgentBanquier findOneByLastLogin(string $last_login) Return the first CommonAgentBanquier filtered by the last_login column
 * @method CommonAgentBanquier findOneByConfirmationToken(string $confirmation_token) Return the first CommonAgentBanquier filtered by the confirmation_token column
 * @method CommonAgentBanquier findOneByPasswordRequestedAt(string $password_requested_at) Return the first CommonAgentBanquier filtered by the password_requested_at column
 * @method CommonAgentBanquier findOneByRoles(string $roles) Return the first CommonAgentBanquier filtered by the roles column
 * @method CommonAgentBanquier findOneByIdBanque(int $id_banque) Return the first CommonAgentBanquier filtered by the id_banque column
 * @method CommonAgentBanquier findOneByIdProfil(int $id_profil) Return the first CommonAgentBanquier filtered by the id_profil column
 * @method CommonAgentBanquier findOneByCreatedAt(string $created_at) Return the first CommonAgentBanquier filtered by the created_at column
 * @method CommonAgentBanquier findOneByUpdatedAt(string $updated_at) Return the first CommonAgentBanquier filtered by the updated_at column
 * @method CommonAgentBanquier findOneByCodeVille(string $code_ville) Return the first CommonAgentBanquier filtered by the code_ville column
 * @method CommonAgentBanquier findOneByCodeAgence(string $code_agence) Return the first CommonAgentBanquier filtered by the code_agence column
 * @method CommonAgentBanquier findOneByIdRefVille(int $id_ref_ville) Return the first CommonAgentBanquier filtered by the id_ref_ville column
 * @method CommonAgentBanquier findOneByNom(string $nom) Return the first CommonAgentBanquier filtered by the nom column
 * @method CommonAgentBanquier findOneByPrenom(string $prenom) Return the first CommonAgentBanquier filtered by the prenom column
 * @method CommonAgentBanquier findOneByTelephone(string $telephone) Return the first CommonAgentBanquier filtered by the telephone column
 * @method CommonAgentBanquier findOneByDeleted(boolean $deleted) Return the first CommonAgentBanquier filtered by the deleted column
 * @method CommonAgentBanquier findOneByNotification(string $notification) Return the first CommonAgentBanquier filtered by the notification column
 *
 * @method array findById(int $id) Return CommonAgentBanquier objects filtered by the id column
 * @method array findByUsername(string $username) Return CommonAgentBanquier objects filtered by the username column
 * @method array findByUsernameCanonical(string $username_canonical) Return CommonAgentBanquier objects filtered by the username_canonical column
 * @method array findByEmail(string $email) Return CommonAgentBanquier objects filtered by the email column
 * @method array findByEmailCanonical(string $email_canonical) Return CommonAgentBanquier objects filtered by the email_canonical column
 * @method array findByEnabled(boolean $enabled) Return CommonAgentBanquier objects filtered by the enabled column
 * @method array findBySalt(string $salt) Return CommonAgentBanquier objects filtered by the salt column
 * @method array findByPassword(string $password) Return CommonAgentBanquier objects filtered by the password column
 * @method array findByLastLogin(string $last_login) Return CommonAgentBanquier objects filtered by the last_login column
 * @method array findByConfirmationToken(string $confirmation_token) Return CommonAgentBanquier objects filtered by the confirmation_token column
 * @method array findByPasswordRequestedAt(string $password_requested_at) Return CommonAgentBanquier objects filtered by the password_requested_at column
 * @method array findByRoles(string $roles) Return CommonAgentBanquier objects filtered by the roles column
 * @method array findByIdBanque(int $id_banque) Return CommonAgentBanquier objects filtered by the id_banque column
 * @method array findByIdProfil(int $id_profil) Return CommonAgentBanquier objects filtered by the id_profil column
 * @method array findByCreatedAt(string $created_at) Return CommonAgentBanquier objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return CommonAgentBanquier objects filtered by the updated_at column
 * @method array findByCodeVille(string $code_ville) Return CommonAgentBanquier objects filtered by the code_ville column
 * @method array findByCodeAgence(string $code_agence) Return CommonAgentBanquier objects filtered by the code_agence column
 * @method array findByIdRefVille(int $id_ref_ville) Return CommonAgentBanquier objects filtered by the id_ref_ville column
 * @method array findByNom(string $nom) Return CommonAgentBanquier objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonAgentBanquier objects filtered by the prenom column
 * @method array findByTelephone(string $telephone) Return CommonAgentBanquier objects filtered by the telephone column
 * @method array findByDeleted(boolean $deleted) Return CommonAgentBanquier objects filtered by the deleted column
 * @method array findByNotification(string $notification) Return CommonAgentBanquier objects filtered by the notification column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAgentBanquierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAgentBanquierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAgentBanquier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAgentBanquierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAgentBanquierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAgentBanquierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAgentBanquierQuery) {
            return $criteria;
        }
        $query = new CommonAgentBanquierQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAgentBanquier|CommonAgentBanquier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAgentBanquierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentBanquierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonAgentBanquier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonAgentBanquier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `id_banque`, `id_profil`, `created_at`, `updated_at`, `code_ville`, `code_agence`, `id_ref_ville`, `nom`, `prenom`, `telephone`, `deleted`, `notification` FROM `agent_banquier` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAgentBanquier();
            $obj->hydrate($row);
            CommonAgentBanquierPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonAgentBanquier|CommonAgentBanquier[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonAgentBanquier[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the username column
     *
     * Example usage:
     * <code>
     * $query->filterByUsername('fooValue');   // WHERE username = 'fooValue'
     * $query->filterByUsername('%fooValue%'); // WHERE username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $username The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByUsername($username = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($username)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $username)) {
                $username = str_replace('*', '%', $username);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::USERNAME, $username, $comparison);
    }

    /**
     * Filter the query on the username_canonical column
     *
     * Example usage:
     * <code>
     * $query->filterByUsernameCanonical('fooValue');   // WHERE username_canonical = 'fooValue'
     * $query->filterByUsernameCanonical('%fooValue%'); // WHERE username_canonical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usernameCanonical The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByUsernameCanonical($usernameCanonical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usernameCanonical)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usernameCanonical)) {
                $usernameCanonical = str_replace('*', '%', $usernameCanonical);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::USERNAME_CANONICAL, $usernameCanonical, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the email_canonical column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailCanonical('fooValue');   // WHERE email_canonical = 'fooValue'
     * $query->filterByEmailCanonical('%fooValue%'); // WHERE email_canonical LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailCanonical The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByEmailCanonical($emailCanonical = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailCanonical)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailCanonical)) {
                $emailCanonical = str_replace('*', '%', $emailCanonical);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::EMAIL_CANONICAL, $emailCanonical, $comparison);
    }

    /**
     * Filter the query on the enabled column
     *
     * Example usage:
     * <code>
     * $query->filterByEnabled(true); // WHERE enabled = true
     * $query->filterByEnabled('yes'); // WHERE enabled = true
     * </code>
     *
     * @param     boolean|string $enabled The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByEnabled($enabled = null, $comparison = null)
    {
        if (is_string($enabled)) {
            $enabled = in_array(strtolower($enabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ENABLED, $enabled, $comparison);
    }

    /**
     * Filter the query on the salt column
     *
     * Example usage:
     * <code>
     * $query->filterBySalt('fooValue');   // WHERE salt = 'fooValue'
     * $query->filterBySalt('%fooValue%'); // WHERE salt LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterBySalt($salt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salt)) {
                $salt = str_replace('*', '%', $salt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::SALT, $salt, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the last_login column
     *
     * Example usage:
     * <code>
     * $query->filterByLastLogin('2011-03-14'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin('now'); // WHERE last_login = '2011-03-14'
     * $query->filterByLastLogin(array('max' => 'yesterday')); // WHERE last_login > '2011-03-13'
     * </code>
     *
     * @param     mixed $lastLogin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByLastLogin($lastLogin = null, $comparison = null)
    {
        if (is_array($lastLogin)) {
            $useMinMax = false;
            if (isset($lastLogin['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::LAST_LOGIN, $lastLogin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lastLogin['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::LAST_LOGIN, $lastLogin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::LAST_LOGIN, $lastLogin, $comparison);
    }

    /**
     * Filter the query on the confirmation_token column
     *
     * Example usage:
     * <code>
     * $query->filterByConfirmationToken('fooValue');   // WHERE confirmation_token = 'fooValue'
     * $query->filterByConfirmationToken('%fooValue%'); // WHERE confirmation_token LIKE '%fooValue%'
     * </code>
     *
     * @param     string $confirmationToken The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByConfirmationToken($confirmationToken = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($confirmationToken)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $confirmationToken)) {
                $confirmationToken = str_replace('*', '%', $confirmationToken);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::CONFIRMATION_TOKEN, $confirmationToken, $comparison);
    }

    /**
     * Filter the query on the password_requested_at column
     *
     * Example usage:
     * <code>
     * $query->filterByPasswordRequestedAt('2011-03-14'); // WHERE password_requested_at = '2011-03-14'
     * $query->filterByPasswordRequestedAt('now'); // WHERE password_requested_at = '2011-03-14'
     * $query->filterByPasswordRequestedAt(array('max' => 'yesterday')); // WHERE password_requested_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $passwordRequestedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByPasswordRequestedAt($passwordRequestedAt = null, $comparison = null)
    {
        if (is_array($passwordRequestedAt)) {
            $useMinMax = false;
            if (isset($passwordRequestedAt['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT, $passwordRequestedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($passwordRequestedAt['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT, $passwordRequestedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::PASSWORD_REQUESTED_AT, $passwordRequestedAt, $comparison);
    }

    /**
     * Filter the query on the roles column
     *
     * Example usage:
     * <code>
     * $query->filterByRoles('fooValue');   // WHERE roles = 'fooValue'
     * $query->filterByRoles('%fooValue%'); // WHERE roles LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roles The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByRoles($roles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roles)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $roles)) {
                $roles = str_replace('*', '%', $roles);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ROLES, $roles, $comparison);
    }

    /**
     * Filter the query on the id_banque column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBanque(1234); // WHERE id_banque = 1234
     * $query->filterByIdBanque(array(12, 34)); // WHERE id_banque IN (12, 34)
     * $query->filterByIdBanque(array('min' => 12)); // WHERE id_banque >= 12
     * $query->filterByIdBanque(array('max' => 12)); // WHERE id_banque <= 12
     * </code>
     *
     * @param     mixed $idBanque The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByIdBanque($idBanque = null, $comparison = null)
    {
        if (is_array($idBanque)) {
            $useMinMax = false;
            if (isset($idBanque['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_BANQUE, $idBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBanque['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_BANQUE, $idBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID_BANQUE, $idBanque, $comparison);
    }

    /**
     * Filter the query on the id_profil column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfil(1234); // WHERE id_profil = 1234
     * $query->filterByIdProfil(array(12, 34)); // WHERE id_profil IN (12, 34)
     * $query->filterByIdProfil(array('min' => 12)); // WHERE id_profil >= 12
     * $query->filterByIdProfil(array('max' => 12)); // WHERE id_profil <= 12
     * </code>
     *
     * @see       filterByCommonCautionProfil()
     *
     * @param     mixed $idProfil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByIdProfil($idProfil = null, $comparison = null)
    {
        if (is_array($idProfil)) {
            $useMinMax = false;
            if (isset($idProfil['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_PROFIL, $idProfil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfil['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_PROFIL, $idProfil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID_PROFIL, $idProfil, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the code_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeVille('fooValue');   // WHERE code_ville = 'fooValue'
     * $query->filterByCodeVille('%fooValue%'); // WHERE code_ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeVille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByCodeVille($codeVille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeVille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeVille)) {
                $codeVille = str_replace('*', '%', $codeVille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::CODE_VILLE, $codeVille, $comparison);
    }

    /**
     * Filter the query on the code_agence column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeAgence('fooValue');   // WHERE code_agence = 'fooValue'
     * $query->filterByCodeAgence('%fooValue%'); // WHERE code_agence LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeAgence The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByCodeAgence($codeAgence = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeAgence)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeAgence)) {
                $codeAgence = str_replace('*', '%', $codeAgence);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::CODE_AGENCE, $codeAgence, $comparison);
    }

    /**
     * Filter the query on the id_ref_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefVille(1234); // WHERE id_ref_ville = 1234
     * $query->filterByIdRefVille(array(12, 34)); // WHERE id_ref_ville IN (12, 34)
     * $query->filterByIdRefVille(array('min' => 12)); // WHERE id_ref_ville >= 12
     * $query->filterByIdRefVille(array('max' => 12)); // WHERE id_ref_ville <= 12
     * </code>
     *
     * @param     mixed $idRefVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByIdRefVille($idRefVille = null, $comparison = null)
    {
        if (is_array($idRefVille)) {
            $useMinMax = false;
            if (isset($idRefVille['min'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_REF_VILLE, $idRefVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefVille['max'])) {
                $this->addUsingAlias(CommonAgentBanquierPeer::ID_REF_VILLE, $idRefVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::ID_REF_VILLE, $idRefVille, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the deleted column
     *
     * Example usage:
     * <code>
     * $query->filterByDeleted(true); // WHERE deleted = true
     * $query->filterByDeleted('yes'); // WHERE deleted = true
     * </code>
     *
     * @param     boolean|string $deleted The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByDeleted($deleted = null, $comparison = null)
    {
        if (is_string($deleted)) {
            $deleted = in_array(strtolower($deleted), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::DELETED, $deleted, $comparison);
    }

    /**
     * Filter the query on the notification column
     *
     * Example usage:
     * <code>
     * $query->filterByNotification('fooValue');   // WHERE notification = 'fooValue'
     * $query->filterByNotification('%fooValue%'); // WHERE notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $notification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function filterByNotification($notification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($notification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $notification)) {
                $notification = str_replace('*', '%', $notification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentBanquierPeer::NOTIFICATION, $notification, $comparison);
    }

    /**
     * Filter the query by a related CommonCautionProfil object
     *
     * @param   CommonCautionProfil|PropelObjectCollection $commonCautionProfil The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionProfil($commonCautionProfil, $comparison = null)
    {
        if ($commonCautionProfil instanceof CommonCautionProfil) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID_PROFIL, $commonCautionProfil->getId(), $comparison);
        } elseif ($commonCautionProfil instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID_PROFIL, $commonCautionProfil->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonCautionProfil() only accepts arguments of type CommonCautionProfil or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionProfil relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionProfil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionProfil');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionProfil');
        }

        return $this;
    }

    /**
     * Use the CommonCautionProfil relation CommonCautionProfil object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionProfilQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionProfilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionProfil($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionProfil', 'CommonCautionProfilQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemandeRelatedByIdAgentBanquierRejet($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionDemande->getIdAgentBanquierRejet(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeRelatedByIdAgentBanquierRejetQuery()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionDemandeRelatedByIdAgentBanquierRejet() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierRejet relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemandeRelatedByIdAgentBanquierRejet($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemandeRelatedByIdAgentBanquierRejet');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemandeRelatedByIdAgentBanquierRejet');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemandeRelatedByIdAgentBanquierRejet relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeRelatedByIdAgentBanquierRejetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonCautionDemandeRelatedByIdAgentBanquierRejet($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemandeRelatedByIdAgentBanquierRejet', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemandeRelatedByIdAgentBanquierValidation($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionDemande->getIdAgentBanquierValidation(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeRelatedByIdAgentBanquierValidationQuery()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionDemandeRelatedByIdAgentBanquierValidation() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentBanquierValidation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemandeRelatedByIdAgentBanquierValidation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemandeRelatedByIdAgentBanquierValidation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemandeRelatedByIdAgentBanquierValidation');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemandeRelatedByIdAgentBanquierValidation relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeRelatedByIdAgentBanquierValidationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonCautionDemandeRelatedByIdAgentBanquierValidation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemandeRelatedByIdAgentBanquierValidation', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemandeRelatedByIdAgentPriseEnCharge($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionDemande->getIdAgentPriseEnCharge(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeRelatedByIdAgentPriseEnChargeQuery()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionDemandeRelatedByIdAgentPriseEnCharge() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemandeRelatedByIdAgentPriseEnCharge relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemandeRelatedByIdAgentPriseEnCharge');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemandeRelatedByIdAgentPriseEnCharge');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemandeRelatedByIdAgentPriseEnCharge relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeRelatedByIdAgentPriseEnChargeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonCautionDemandeRelatedByIdAgentPriseEnCharge($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemandeRelatedByIdAgentPriseEnCharge', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemandeRelatedByIdSignataire1($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionDemande->getIdSignataire1(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeRelatedByIdSignataire1Query()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionDemandeRelatedByIdSignataire1() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemandeRelatedByIdSignataire1($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemandeRelatedByIdSignataire1');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemandeRelatedByIdSignataire1');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemandeRelatedByIdSignataire1 relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeRelatedByIdSignataire1Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonCautionDemandeRelatedByIdSignataire1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemandeRelatedByIdSignataire1', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemandeRelatedByIdSignataire2($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionDemande->getIdSignataire2(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionDemandeRelatedByIdSignataire2Query()
                ->filterByPrimaryKeys($commonCautionDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionDemandeRelatedByIdSignataire2() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemandeRelatedByIdSignataire2 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemandeRelatedByIdSignataire2($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemandeRelatedByIdSignataire2');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionDemandeRelatedByIdSignataire2');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemandeRelatedByIdSignataire2 relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeRelatedByIdSignataire2Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonCautionDemandeRelatedByIdSignataire2($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemandeRelatedByIdSignataire2', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonCautionSignataireDemande object
     *
     * @param   CommonCautionSignataireDemande|PropelObjectCollection $commonCautionSignataireDemande  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAgentBanquierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionSignataireDemande($commonCautionSignataireDemande, $comparison = null)
    {
        if ($commonCautionSignataireDemande instanceof CommonCautionSignataireDemande) {
            return $this
                ->addUsingAlias(CommonAgentBanquierPeer::ID, $commonCautionSignataireDemande->getIdSignataire(), $comparison);
        } elseif ($commonCautionSignataireDemande instanceof PropelObjectCollection) {
            return $this
                ->useCommonCautionSignataireDemandeQuery()
                ->filterByPrimaryKeys($commonCautionSignataireDemande->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonCautionSignataireDemande() only accepts arguments of type CommonCautionSignataireDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionSignataireDemande relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function joinCommonCautionSignataireDemande($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionSignataireDemande');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonCautionSignataireDemande');
        }

        return $this;
    }

    /**
     * Use the CommonCautionSignataireDemande relation CommonCautionSignataireDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionSignataireDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionSignataireDemandeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionSignataireDemande($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionSignataireDemande', 'CommonCautionSignataireDemandeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAgentBanquier $commonAgentBanquier Object to remove from the list of results
     *
     * @return CommonAgentBanquierQuery The current query, for fluid interface
     */
    public function prune($commonAgentBanquier = null)
    {
        if ($commonAgentBanquier) {
            $this->addUsingAlias(CommonAgentBanquierPeer::ID, $commonAgentBanquier->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
