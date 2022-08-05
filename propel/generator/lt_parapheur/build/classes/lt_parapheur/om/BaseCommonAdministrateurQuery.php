<?php


/**
 * Base class that represents a query for the 'Administrateur' table.
 *
 * 
 *
 * @method CommonAdministrateurQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAdministrateurQuery orderByOriginalLogin($order = Criteria::ASC) Order by the original_login column
 * @method CommonAdministrateurQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonAdministrateurQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonAdministrateurQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonAdministrateurQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonAdministrateurQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonAdministrateurQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonAdministrateurQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAdministrateurQuery orderByAdminGeneral($order = Criteria::ASC) Order by the admin_general column
 * @method CommonAdministrateurQuery orderByTentativesMdp($order = Criteria::ASC) Order by the tentatives_mdp column
 *
 * @method CommonAdministrateurQuery groupById() Group by the id column
 * @method CommonAdministrateurQuery groupByOriginalLogin() Group by the original_login column
 * @method CommonAdministrateurQuery groupByLogin() Group by the login column
 * @method CommonAdministrateurQuery groupByCertificat() Group by the certificat column
 * @method CommonAdministrateurQuery groupByMdp() Group by the mdp column
 * @method CommonAdministrateurQuery groupByNom() Group by the nom column
 * @method CommonAdministrateurQuery groupByPrenom() Group by the prenom column
 * @method CommonAdministrateurQuery groupByEmail() Group by the email column
 * @method CommonAdministrateurQuery groupByOrganisme() Group by the organisme column
 * @method CommonAdministrateurQuery groupByAdminGeneral() Group by the admin_general column
 * @method CommonAdministrateurQuery groupByTentativesMdp() Group by the tentatives_mdp column
 *
 * @method CommonAdministrateurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAdministrateurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAdministrateurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAdministrateur findOne(PropelPDO $con = null) Return the first CommonAdministrateur matching the query
 * @method CommonAdministrateur findOneOrCreate(PropelPDO $con = null) Return the first CommonAdministrateur matching the query, or a new CommonAdministrateur object populated from the query conditions when no match is found
 *
 * @method CommonAdministrateur findOneByOriginalLogin(string $original_login) Return the first CommonAdministrateur filtered by the original_login column
 * @method CommonAdministrateur findOneByLogin(string $login) Return the first CommonAdministrateur filtered by the login column
 * @method CommonAdministrateur findOneByCertificat(string $certificat) Return the first CommonAdministrateur filtered by the certificat column
 * @method CommonAdministrateur findOneByMdp(string $mdp) Return the first CommonAdministrateur filtered by the mdp column
 * @method CommonAdministrateur findOneByNom(string $nom) Return the first CommonAdministrateur filtered by the nom column
 * @method CommonAdministrateur findOneByPrenom(string $prenom) Return the first CommonAdministrateur filtered by the prenom column
 * @method CommonAdministrateur findOneByEmail(string $email) Return the first CommonAdministrateur filtered by the email column
 * @method CommonAdministrateur findOneByOrganisme(string $organisme) Return the first CommonAdministrateur filtered by the organisme column
 * @method CommonAdministrateur findOneByAdminGeneral(string $admin_general) Return the first CommonAdministrateur filtered by the admin_general column
 * @method CommonAdministrateur findOneByTentativesMdp(int $tentatives_mdp) Return the first CommonAdministrateur filtered by the tentatives_mdp column
 *
 * @method array findById(int $id) Return CommonAdministrateur objects filtered by the id column
 * @method array findByOriginalLogin(string $original_login) Return CommonAdministrateur objects filtered by the original_login column
 * @method array findByLogin(string $login) Return CommonAdministrateur objects filtered by the login column
 * @method array findByCertificat(string $certificat) Return CommonAdministrateur objects filtered by the certificat column
 * @method array findByMdp(string $mdp) Return CommonAdministrateur objects filtered by the mdp column
 * @method array findByNom(string $nom) Return CommonAdministrateur objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonAdministrateur objects filtered by the prenom column
 * @method array findByEmail(string $email) Return CommonAdministrateur objects filtered by the email column
 * @method array findByOrganisme(string $organisme) Return CommonAdministrateur objects filtered by the organisme column
 * @method array findByAdminGeneral(string $admin_general) Return CommonAdministrateur objects filtered by the admin_general column
 * @method array findByTentativesMdp(int $tentatives_mdp) Return CommonAdministrateur objects filtered by the tentatives_mdp column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAdministrateurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAdministrateurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAdministrateur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAdministrateurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAdministrateurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAdministrateurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAdministrateurQuery) {
            return $criteria;
        }
        $query = new CommonAdministrateurQuery();
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
     * @return   CommonAdministrateur|CommonAdministrateur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAdministrateurPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAdministrateurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdministrateur A model object, or null if the key is not found
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
     * @return                 CommonAdministrateur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `original_login`, `login`, `certificat`, `mdp`, `nom`, `prenom`, `email`, `organisme`, `admin_general`, `tentatives_mdp` FROM `Administrateur` WHERE `id` = :p0';
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
            $obj = new CommonAdministrateur();
            $obj->hydrate($row);
            CommonAdministrateurPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAdministrateur|CommonAdministrateur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAdministrateur[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAdministrateurPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAdministrateurPeer::ID, $keys, Criteria::IN);
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
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAdministrateurPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAdministrateurPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the original_login column
     *
     * Example usage:
     * <code>
     * $query->filterByOriginalLogin('fooValue');   // WHERE original_login = 'fooValue'
     * $query->filterByOriginalLogin('%fooValue%'); // WHERE original_login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $originalLogin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByOriginalLogin($originalLogin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($originalLogin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $originalLogin)) {
                $originalLogin = str_replace('*', '%', $originalLogin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::ORIGINAL_LOGIN, $originalLogin, $comparison);
    }

    /**
     * Filter the query on the login column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByMdp('fooValue');   // WHERE mdp = 'fooValue'
     * $query->filterByMdp('%fooValue%'); // WHERE mdp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mdp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByMdp($mdp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mdp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mdp)) {
                $mdp = str_replace('*', '%', $mdp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::MDP, $mdp, $comparison);
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
     * @return CommonAdministrateurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAdministrateurPeer::NOM, $nom, $comparison);
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
     * @return CommonAdministrateurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAdministrateurPeer::PRENOM, $prenom, $comparison);
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
     * @return CommonAdministrateurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAdministrateurPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the admin_general column
     *
     * Example usage:
     * <code>
     * $query->filterByAdminGeneral('fooValue');   // WHERE admin_general = 'fooValue'
     * $query->filterByAdminGeneral('%fooValue%'); // WHERE admin_general LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adminGeneral The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByAdminGeneral($adminGeneral = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adminGeneral)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adminGeneral)) {
                $adminGeneral = str_replace('*', '%', $adminGeneral);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::ADMIN_GENERAL, $adminGeneral, $comparison);
    }

    /**
     * Filter the query on the tentatives_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativesMdp(1234); // WHERE tentatives_mdp = 1234
     * $query->filterByTentativesMdp(array(12, 34)); // WHERE tentatives_mdp IN (12, 34)
     * $query->filterByTentativesMdp(array('min' => 12)); // WHERE tentatives_mdp >= 12
     * $query->filterByTentativesMdp(array('max' => 12)); // WHERE tentatives_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativesMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function filterByTentativesMdp($tentativesMdp = null, $comparison = null)
    {
        if (is_array($tentativesMdp)) {
            $useMinMax = false;
            if (isset($tentativesMdp['min'])) {
                $this->addUsingAlias(CommonAdministrateurPeer::TENTATIVES_MDP, $tentativesMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativesMdp['max'])) {
                $this->addUsingAlias(CommonAdministrateurPeer::TENTATIVES_MDP, $tentativesMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdministrateurPeer::TENTATIVES_MDP, $tentativesMdp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAdministrateur $commonAdministrateur Object to remove from the list of results
     *
     * @return CommonAdministrateurQuery The current query, for fluid interface
     */
    public function prune($commonAdministrateur = null)
    {
        if ($commonAdministrateur) {
            $this->addUsingAlias(CommonAdministrateurPeer::ID, $commonAdministrateur->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
