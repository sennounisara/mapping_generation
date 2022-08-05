<?php


/**
 * Base class that represents a query for the 'Inscrit_Sub' table.
 *
 * 
 *
 * @method CommonInscritSubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInscritSubQuery orderByEntrepriseId($order = Criteria::ASC) Order by the entreprise_id column
 * @method CommonInscritSubQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonInscritSubQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonInscritSubQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonInscritSubQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonInscritSubQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonInscritSubQuery orderByProfil($order = Criteria::ASC) Order by the profil column
 * @method CommonInscritSubQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonInscritSubQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonInscritSubQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 *
 * @method CommonInscritSubQuery groupById() Group by the id column
 * @method CommonInscritSubQuery groupByEntrepriseId() Group by the entreprise_id column
 * @method CommonInscritSubQuery groupByLogin() Group by the login column
 * @method CommonInscritSubQuery groupByMdp() Group by the mdp column
 * @method CommonInscritSubQuery groupByNom() Group by the nom column
 * @method CommonInscritSubQuery groupByPrenom() Group by the prenom column
 * @method CommonInscritSubQuery groupByEmail() Group by the email column
 * @method CommonInscritSubQuery groupByProfil() Group by the profil column
 * @method CommonInscritSubQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonInscritSubQuery groupByDateCreation() Group by the date_creation column
 * @method CommonInscritSubQuery groupByDateModification() Group by the date_modification column
 *
 * @method CommonInscritSubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInscritSubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInscritSubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInscritSubQuery leftJoinCommonInscrit($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonInscrit relation
 * @method CommonInscritSubQuery rightJoinCommonInscrit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonInscrit relation
 * @method CommonInscritSubQuery innerJoinCommonInscrit($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonInscrit relation
 *
 * @method CommonInscritSub findOne(PropelPDO $con = null) Return the first CommonInscritSub matching the query
 * @method CommonInscritSub findOneOrCreate(PropelPDO $con = null) Return the first CommonInscritSub matching the query, or a new CommonInscritSub object populated from the query conditions when no match is found
 *
 * @method CommonInscritSub findOneById(int $id) Return the first CommonInscritSub filtered by the id column
 * @method CommonInscritSub findOneByEntrepriseId(int $entreprise_id) Return the first CommonInscritSub filtered by the entreprise_id column
 * @method CommonInscritSub findOneByLogin(string $login) Return the first CommonInscritSub filtered by the login column
 * @method CommonInscritSub findOneByMdp(string $mdp) Return the first CommonInscritSub filtered by the mdp column
 * @method CommonInscritSub findOneByNom(string $nom) Return the first CommonInscritSub filtered by the nom column
 * @method CommonInscritSub findOneByPrenom(string $prenom) Return the first CommonInscritSub filtered by the prenom column
 * @method CommonInscritSub findOneByEmail(string $email) Return the first CommonInscritSub filtered by the email column
 * @method CommonInscritSub findOneByProfil(int $profil) Return the first CommonInscritSub filtered by the profil column
 * @method CommonInscritSub findOneByIdInscrit(int $id_inscrit) Return the first CommonInscritSub filtered by the id_inscrit column
 * @method CommonInscritSub findOneByDateCreation(string $date_creation) Return the first CommonInscritSub filtered by the date_creation column
 * @method CommonInscritSub findOneByDateModification(string $date_modification) Return the first CommonInscritSub filtered by the date_modification column
 *
 * @method array findById(int $id) Return CommonInscritSub objects filtered by the id column
 * @method array findByEntrepriseId(int $entreprise_id) Return CommonInscritSub objects filtered by the entreprise_id column
 * @method array findByLogin(string $login) Return CommonInscritSub objects filtered by the login column
 * @method array findByMdp(string $mdp) Return CommonInscritSub objects filtered by the mdp column
 * @method array findByNom(string $nom) Return CommonInscritSub objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonInscritSub objects filtered by the prenom column
 * @method array findByEmail(string $email) Return CommonInscritSub objects filtered by the email column
 * @method array findByProfil(int $profil) Return CommonInscritSub objects filtered by the profil column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonInscritSub objects filtered by the id_inscrit column
 * @method array findByDateCreation(string $date_creation) Return CommonInscritSub objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonInscritSub objects filtered by the date_modification column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInscritSubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInscritSubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInscritSub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInscritSubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInscritSubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInscritSubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInscritSubQuery) {
            return $criteria;
        }
        $query = new CommonInscritSubQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $entreprise_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonInscritSub|CommonInscritSub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInscritSubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritSubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonInscritSub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `entreprise_id`, `login`, `mdp`, `nom`, `prenom`, `email`, `profil`, `id_inscrit`, `date_creation`, `date_modification` FROM `Inscrit_Sub` WHERE `id` = :p0 AND `entreprise_id` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonInscritSub();
            $obj->hydrate($row);
            CommonInscritSubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonInscritSub|CommonInscritSub[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonInscritSub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonInscritSubPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonInscritSubPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonInscritSubPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonInscritSubPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the entreprise_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseId(1234); // WHERE entreprise_id = 1234
     * $query->filterByEntrepriseId(array(12, 34)); // WHERE entreprise_id IN (12, 34)
     * $query->filterByEntrepriseId(array('min' => 12)); // WHERE entreprise_id >= 12
     * $query->filterByEntrepriseId(array('max' => 12)); // WHERE entreprise_id <= 12
     * </code>
     *
     * @param     mixed $entrepriseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByEntrepriseId($entrepriseId = null, $comparison = null)
    {
        if (is_array($entrepriseId)) {
            $useMinMax = false;
            if (isset($entrepriseId['min'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ENTREPRISE_ID, $entrepriseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entrepriseId['max'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ENTREPRISE_ID, $entrepriseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::ENTREPRISE_ID, $entrepriseId, $comparison);
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
     * @return CommonInscritSubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritSubPeer::LOGIN, $login, $comparison);
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
     * @return CommonInscritSubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritSubPeer::MDP, $mdp, $comparison);
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
     * @return CommonInscritSubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritSubPeer::NOM, $nom, $comparison);
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
     * @return CommonInscritSubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritSubPeer::PRENOM, $prenom, $comparison);
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
     * @return CommonInscritSubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritSubPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the profil column
     *
     * Example usage:
     * <code>
     * $query->filterByProfil(1234); // WHERE profil = 1234
     * $query->filterByProfil(array(12, 34)); // WHERE profil IN (12, 34)
     * $query->filterByProfil(array('min' => 12)); // WHERE profil >= 12
     * $query->filterByProfil(array('max' => 12)); // WHERE profil <= 12
     * </code>
     *
     * @param     mixed $profil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByProfil($profil = null, $comparison = null)
    {
        if (is_array($profil)) {
            $useMinMax = false;
            if (isset($profil['min'])) {
                $this->addUsingAlias(CommonInscritSubPeer::PROFIL, $profil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($profil['max'])) {
                $this->addUsingAlias(CommonInscritSubPeer::PROFIL, $profil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::PROFIL, $profil, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @see       filterByCommonInscrit()
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonInscritSubPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritSubPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query by a related CommonInscrit object
     *
     * @param   CommonInscrit|PropelObjectCollection $commonInscrit The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonInscritSubQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonInscrit($commonInscrit, $comparison = null)
    {
        if ($commonInscrit instanceof CommonInscrit) {
            return $this
                ->addUsingAlias(CommonInscritSubPeer::ID_INSCRIT, $commonInscrit->getId(), $comparison);
        } elseif ($commonInscrit instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonInscritSubPeer::ID_INSCRIT, $commonInscrit->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonInscrit() only accepts arguments of type CommonInscrit or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonInscrit relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function joinCommonInscrit($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonInscrit');

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
            $this->addJoinObject($join, 'CommonInscrit');
        }

        return $this;
    }

    /**
     * Use the CommonInscrit relation CommonInscrit object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonInscritQuery A secondary query class using the current class as primary query
     */
    public function useCommonInscritQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonInscrit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonInscrit', 'CommonInscritQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInscritSub $commonInscritSub Object to remove from the list of results
     *
     * @return CommonInscritSubQuery The current query, for fluid interface
     */
    public function prune($commonInscritSub = null)
    {
        if ($commonInscritSub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonInscritSubPeer::ID), $commonInscritSub->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonInscritSubPeer::ENTREPRISE_ID), $commonInscritSub->getEntrepriseId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
