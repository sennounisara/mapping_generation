<?php


/**
 * Base class that represents a query for the 'EnchereEntreprisePmi' table.
 *
 * 
 *
 * @method CommonEnchereEntreprisePmiQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereEntreprisePmiQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereEntreprisePmiQuery orderByIdenchere($order = Criteria::ASC) Order by the idEnchere column
 * @method CommonEnchereEntreprisePmiQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonEnchereEntreprisePmiQuery orderByNumeroanonyme($order = Criteria::ASC) Order by the numeroAnonyme column
 * @method CommonEnchereEntreprisePmiQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonEnchereEntreprisePmiQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonEnchereEntreprisePmiQuery orderByNotetechnique($order = Criteria::ASC) Order by the noteTechnique column
 * @method CommonEnchereEntreprisePmiQuery orderByIdentreprise($order = Criteria::ASC) Order by the idEntreprise column
 * @method CommonEnchereEntreprisePmiQuery orderByDateping($order = Criteria::ASC) Order by the datePing column
 * @method CommonEnchereEntreprisePmiQuery orderByNomagentconnecte($order = Criteria::ASC) Order by the nomAgentConnecte column
 *
 * @method CommonEnchereEntreprisePmiQuery groupById() Group by the id column
 * @method CommonEnchereEntreprisePmiQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereEntreprisePmiQuery groupByIdenchere() Group by the idEnchere column
 * @method CommonEnchereEntreprisePmiQuery groupByNom() Group by the nom column
 * @method CommonEnchereEntreprisePmiQuery groupByNumeroanonyme() Group by the numeroAnonyme column
 * @method CommonEnchereEntreprisePmiQuery groupByEmail() Group by the email column
 * @method CommonEnchereEntreprisePmiQuery groupByMdp() Group by the mdp column
 * @method CommonEnchereEntreprisePmiQuery groupByNotetechnique() Group by the noteTechnique column
 * @method CommonEnchereEntreprisePmiQuery groupByIdentreprise() Group by the idEntreprise column
 * @method CommonEnchereEntreprisePmiQuery groupByDateping() Group by the datePing column
 * @method CommonEnchereEntreprisePmiQuery groupByNomagentconnecte() Group by the nomAgentConnecte column
 *
 * @method CommonEnchereEntreprisePmiQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereEntreprisePmiQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereEntreprisePmiQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereEntreprisePmi findOne(PropelPDO $con = null) Return the first CommonEnchereEntreprisePmi matching the query
 * @method CommonEnchereEntreprisePmi findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereEntreprisePmi matching the query, or a new CommonEnchereEntreprisePmi object populated from the query conditions when no match is found
 *
 * @method CommonEnchereEntreprisePmi findOneById(int $id) Return the first CommonEnchereEntreprisePmi filtered by the id column
 * @method CommonEnchereEntreprisePmi findOneByOrganisme(string $organisme) Return the first CommonEnchereEntreprisePmi filtered by the organisme column
 * @method CommonEnchereEntreprisePmi findOneByIdenchere(int $idEnchere) Return the first CommonEnchereEntreprisePmi filtered by the idEnchere column
 * @method CommonEnchereEntreprisePmi findOneByNom(string $nom) Return the first CommonEnchereEntreprisePmi filtered by the nom column
 * @method CommonEnchereEntreprisePmi findOneByNumeroanonyme(int $numeroAnonyme) Return the first CommonEnchereEntreprisePmi filtered by the numeroAnonyme column
 * @method CommonEnchereEntreprisePmi findOneByEmail(string $email) Return the first CommonEnchereEntreprisePmi filtered by the email column
 * @method CommonEnchereEntreprisePmi findOneByMdp(string $mdp) Return the first CommonEnchereEntreprisePmi filtered by the mdp column
 * @method CommonEnchereEntreprisePmi findOneByNotetechnique(double $noteTechnique) Return the first CommonEnchereEntreprisePmi filtered by the noteTechnique column
 * @method CommonEnchereEntreprisePmi findOneByIdentreprise(int $idEntreprise) Return the first CommonEnchereEntreprisePmi filtered by the idEntreprise column
 * @method CommonEnchereEntreprisePmi findOneByDateping(string $datePing) Return the first CommonEnchereEntreprisePmi filtered by the datePing column
 * @method CommonEnchereEntreprisePmi findOneByNomagentconnecte(string $nomAgentConnecte) Return the first CommonEnchereEntreprisePmi filtered by the nomAgentConnecte column
 *
 * @method array findById(int $id) Return CommonEnchereEntreprisePmi objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereEntreprisePmi objects filtered by the organisme column
 * @method array findByIdenchere(int $idEnchere) Return CommonEnchereEntreprisePmi objects filtered by the idEnchere column
 * @method array findByNom(string $nom) Return CommonEnchereEntreprisePmi objects filtered by the nom column
 * @method array findByNumeroanonyme(int $numeroAnonyme) Return CommonEnchereEntreprisePmi objects filtered by the numeroAnonyme column
 * @method array findByEmail(string $email) Return CommonEnchereEntreprisePmi objects filtered by the email column
 * @method array findByMdp(string $mdp) Return CommonEnchereEntreprisePmi objects filtered by the mdp column
 * @method array findByNotetechnique(double $noteTechnique) Return CommonEnchereEntreprisePmi objects filtered by the noteTechnique column
 * @method array findByIdentreprise(int $idEntreprise) Return CommonEnchereEntreprisePmi objects filtered by the idEntreprise column
 * @method array findByDateping(string $datePing) Return CommonEnchereEntreprisePmi objects filtered by the datePing column
 * @method array findByNomagentconnecte(string $nomAgentConnecte) Return CommonEnchereEntreprisePmi objects filtered by the nomAgentConnecte column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereEntreprisePmiQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereEntreprisePmiQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereEntreprisePmi', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereEntreprisePmiQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereEntreprisePmiQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereEntreprisePmiQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereEntreprisePmiQuery) {
            return $criteria;
        }
        $query = new CommonEnchereEntreprisePmiQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonEnchereEntreprisePmi|CommonEnchereEntreprisePmi[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereEntreprisePmiPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereEntreprisePmiPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereEntreprisePmi A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchere`, `nom`, `numeroAnonyme`, `email`, `mdp`, `noteTechnique`, `idEntreprise`, `datePing`, `nomAgentConnecte` FROM `EnchereEntreprisePmi` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonEnchereEntreprisePmi();
            $obj->hydrate($row);
            CommonEnchereEntreprisePmiPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereEntreprisePmi|CommonEnchereEntreprisePmi[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereEntreprisePmi[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereEntreprisePmiPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereEntreprisePmiPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ID, $id, $comparison);
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idEnchere column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchere(1234); // WHERE idEnchere = 1234
     * $query->filterByIdenchere(array(12, 34)); // WHERE idEnchere IN (12, 34)
     * $query->filterByIdenchere(array('min' => 12)); // WHERE idEnchere >= 12
     * $query->filterByIdenchere(array('max' => 12)); // WHERE idEnchere <= 12
     * </code>
     *
     * @param     mixed $idenchere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByIdenchere($idenchere = null, $comparison = null)
    {
        if (is_array($idenchere)) {
            $useMinMax = false;
            if (isset($idenchere['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENCHERE, $idenchere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchere['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENCHERE, $idenchere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENCHERE, $idenchere, $comparison);
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the numeroAnonyme column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroanonyme(1234); // WHERE numeroAnonyme = 1234
     * $query->filterByNumeroanonyme(array(12, 34)); // WHERE numeroAnonyme IN (12, 34)
     * $query->filterByNumeroanonyme(array('min' => 12)); // WHERE numeroAnonyme >= 12
     * $query->filterByNumeroanonyme(array('max' => 12)); // WHERE numeroAnonyme <= 12
     * </code>
     *
     * @param     mixed $numeroanonyme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByNumeroanonyme($numeroanonyme = null, $comparison = null)
    {
        if (is_array($numeroanonyme)) {
            $useMinMax = false;
            if (isset($numeroanonyme['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NUMEROANONYME, $numeroanonyme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroanonyme['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NUMEROANONYME, $numeroanonyme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NUMEROANONYME, $numeroanonyme, $comparison);
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::EMAIL, $email, $comparison);
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
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::MDP, $mdp, $comparison);
    }

    /**
     * Filter the query on the noteTechnique column
     *
     * Example usage:
     * <code>
     * $query->filterByNotetechnique(1234); // WHERE noteTechnique = 1234
     * $query->filterByNotetechnique(array(12, 34)); // WHERE noteTechnique IN (12, 34)
     * $query->filterByNotetechnique(array('min' => 12)); // WHERE noteTechnique >= 12
     * $query->filterByNotetechnique(array('max' => 12)); // WHERE noteTechnique <= 12
     * </code>
     *
     * @param     mixed $notetechnique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByNotetechnique($notetechnique = null, $comparison = null)
    {
        if (is_array($notetechnique)) {
            $useMinMax = false;
            if (isset($notetechnique['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE, $notetechnique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notetechnique['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE, $notetechnique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NOTETECHNIQUE, $notetechnique, $comparison);
    }

    /**
     * Filter the query on the idEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentreprise(1234); // WHERE idEntreprise = 1234
     * $query->filterByIdentreprise(array(12, 34)); // WHERE idEntreprise IN (12, 34)
     * $query->filterByIdentreprise(array('min' => 12)); // WHERE idEntreprise >= 12
     * $query->filterByIdentreprise(array('max' => 12)); // WHERE idEntreprise <= 12
     * </code>
     *
     * @param     mixed $identreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByIdentreprise($identreprise = null, $comparison = null)
    {
        if (is_array($identreprise)) {
            $useMinMax = false;
            if (isset($identreprise['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENTREPRISE, $identreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identreprise['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENTREPRISE, $identreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::IDENTREPRISE, $identreprise, $comparison);
    }

    /**
     * Filter the query on the datePing column
     *
     * Example usage:
     * <code>
     * $query->filterByDateping('2011-03-14'); // WHERE datePing = '2011-03-14'
     * $query->filterByDateping('now'); // WHERE datePing = '2011-03-14'
     * $query->filterByDateping(array('max' => 'yesterday')); // WHERE datePing > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateping The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByDateping($dateping = null, $comparison = null)
    {
        if (is_array($dateping)) {
            $useMinMax = false;
            if (isset($dateping['min'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::DATEPING, $dateping['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateping['max'])) {
                $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::DATEPING, $dateping['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::DATEPING, $dateping, $comparison);
    }

    /**
     * Filter the query on the nomAgentConnecte column
     *
     * Example usage:
     * <code>
     * $query->filterByNomagentconnecte('fooValue');   // WHERE nomAgentConnecte = 'fooValue'
     * $query->filterByNomagentconnecte('%fooValue%'); // WHERE nomAgentConnecte LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomagentconnecte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function filterByNomagentconnecte($nomagentconnecte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomagentconnecte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomagentconnecte)) {
                $nomagentconnecte = str_replace('*', '%', $nomagentconnecte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereEntreprisePmiPeer::NOMAGENTCONNECTE, $nomagentconnecte, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereEntreprisePmi $commonEnchereEntreprisePmi Object to remove from the list of results
     *
     * @return CommonEnchereEntreprisePmiQuery The current query, for fluid interface
     */
    public function prune($commonEnchereEntreprisePmi = null)
    {
        if ($commonEnchereEntreprisePmi) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereEntreprisePmiPeer::ID), $commonEnchereEntreprisePmi->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereEntreprisePmiPeer::ORGANISME), $commonEnchereEntreprisePmi->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
