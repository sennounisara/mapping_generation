<?php


/**
 * Base class that represents a query for the 'EnchereReference' table.
 *
 * 
 *
 * @method CommonEnchereReferenceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereReferenceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereReferenceQuery orderByIdenchere($order = Criteria::ASC) Order by the idEnchere column
 * @method CommonEnchereReferenceQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonEnchereReferenceQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonEnchereReferenceQuery orderByIsmontant($order = Criteria::ASC) Order by the isMontant column
 * @method CommonEnchereReferenceQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonEnchereReferenceQuery orderByPasmin($order = Criteria::ASC) Order by the pasMin column
 * @method CommonEnchereReferenceQuery orderByPasmax($order = Criteria::ASC) Order by the pasMax column
 * @method CommonEnchereReferenceQuery orderByValeurreference($order = Criteria::ASC) Order by the valeurReference column
 * @method CommonEnchereReferenceQuery orderByValeurdepartcommune($order = Criteria::ASC) Order by the valeurDepartCommune column
 * @method CommonEnchereReferenceQuery orderByValeurdepart($order = Criteria::ASC) Order by the valeurDepart column
 * @method CommonEnchereReferenceQuery orderByTypebaremereference($order = Criteria::ASC) Order by the typeBaremeReference column
 * @method CommonEnchereReferenceQuery orderByPonderationnotereference($order = Criteria::ASC) Order by the ponderationNoteReference column
 * @method CommonEnchereReferenceQuery orderByNotemaxbaremerelatif($order = Criteria::ASC) Order by the noteMaxBaremeRelatif column
 *
 * @method CommonEnchereReferenceQuery groupById() Group by the id column
 * @method CommonEnchereReferenceQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereReferenceQuery groupByIdenchere() Group by the idEnchere column
 * @method CommonEnchereReferenceQuery groupByLibelle() Group by the libelle column
 * @method CommonEnchereReferenceQuery groupByQuantite() Group by the quantite column
 * @method CommonEnchereReferenceQuery groupByIsmontant() Group by the isMontant column
 * @method CommonEnchereReferenceQuery groupByUnite() Group by the unite column
 * @method CommonEnchereReferenceQuery groupByPasmin() Group by the pasMin column
 * @method CommonEnchereReferenceQuery groupByPasmax() Group by the pasMax column
 * @method CommonEnchereReferenceQuery groupByValeurreference() Group by the valeurReference column
 * @method CommonEnchereReferenceQuery groupByValeurdepartcommune() Group by the valeurDepartCommune column
 * @method CommonEnchereReferenceQuery groupByValeurdepart() Group by the valeurDepart column
 * @method CommonEnchereReferenceQuery groupByTypebaremereference() Group by the typeBaremeReference column
 * @method CommonEnchereReferenceQuery groupByPonderationnotereference() Group by the ponderationNoteReference column
 * @method CommonEnchereReferenceQuery groupByNotemaxbaremerelatif() Group by the noteMaxBaremeRelatif column
 *
 * @method CommonEnchereReferenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereReferenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereReferenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereReference findOne(PropelPDO $con = null) Return the first CommonEnchereReference matching the query
 * @method CommonEnchereReference findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereReference matching the query, or a new CommonEnchereReference object populated from the query conditions when no match is found
 *
 * @method CommonEnchereReference findOneById(int $id) Return the first CommonEnchereReference filtered by the id column
 * @method CommonEnchereReference findOneByOrganisme(string $organisme) Return the first CommonEnchereReference filtered by the organisme column
 * @method CommonEnchereReference findOneByIdenchere(int $idEnchere) Return the first CommonEnchereReference filtered by the idEnchere column
 * @method CommonEnchereReference findOneByLibelle(string $libelle) Return the first CommonEnchereReference filtered by the libelle column
 * @method CommonEnchereReference findOneByQuantite(double $quantite) Return the first CommonEnchereReference filtered by the quantite column
 * @method CommonEnchereReference findOneByIsmontant(string $isMontant) Return the first CommonEnchereReference filtered by the isMontant column
 * @method CommonEnchereReference findOneByUnite(string $unite) Return the first CommonEnchereReference filtered by the unite column
 * @method CommonEnchereReference findOneByPasmin(double $pasMin) Return the first CommonEnchereReference filtered by the pasMin column
 * @method CommonEnchereReference findOneByPasmax(double $pasMax) Return the first CommonEnchereReference filtered by the pasMax column
 * @method CommonEnchereReference findOneByValeurreference(double $valeurReference) Return the first CommonEnchereReference filtered by the valeurReference column
 * @method CommonEnchereReference findOneByValeurdepartcommune(string $valeurDepartCommune) Return the first CommonEnchereReference filtered by the valeurDepartCommune column
 * @method CommonEnchereReference findOneByValeurdepart(double $valeurDepart) Return the first CommonEnchereReference filtered by the valeurDepart column
 * @method CommonEnchereReference findOneByTypebaremereference(string $typeBaremeReference) Return the first CommonEnchereReference filtered by the typeBaremeReference column
 * @method CommonEnchereReference findOneByPonderationnotereference(double $ponderationNoteReference) Return the first CommonEnchereReference filtered by the ponderationNoteReference column
 * @method CommonEnchereReference findOneByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return the first CommonEnchereReference filtered by the noteMaxBaremeRelatif column
 *
 * @method array findById(int $id) Return CommonEnchereReference objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereReference objects filtered by the organisme column
 * @method array findByIdenchere(int $idEnchere) Return CommonEnchereReference objects filtered by the idEnchere column
 * @method array findByLibelle(string $libelle) Return CommonEnchereReference objects filtered by the libelle column
 * @method array findByQuantite(double $quantite) Return CommonEnchereReference objects filtered by the quantite column
 * @method array findByIsmontant(string $isMontant) Return CommonEnchereReference objects filtered by the isMontant column
 * @method array findByUnite(string $unite) Return CommonEnchereReference objects filtered by the unite column
 * @method array findByPasmin(double $pasMin) Return CommonEnchereReference objects filtered by the pasMin column
 * @method array findByPasmax(double $pasMax) Return CommonEnchereReference objects filtered by the pasMax column
 * @method array findByValeurreference(double $valeurReference) Return CommonEnchereReference objects filtered by the valeurReference column
 * @method array findByValeurdepartcommune(string $valeurDepartCommune) Return CommonEnchereReference objects filtered by the valeurDepartCommune column
 * @method array findByValeurdepart(double $valeurDepart) Return CommonEnchereReference objects filtered by the valeurDepart column
 * @method array findByTypebaremereference(string $typeBaremeReference) Return CommonEnchereReference objects filtered by the typeBaremeReference column
 * @method array findByPonderationnotereference(double $ponderationNoteReference) Return CommonEnchereReference objects filtered by the ponderationNoteReference column
 * @method array findByNotemaxbaremerelatif(double $noteMaxBaremeRelatif) Return CommonEnchereReference objects filtered by the noteMaxBaremeRelatif column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereReferenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereReferenceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereReference', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereReferenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereReferenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereReferenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereReferenceQuery) {
            return $criteria;
        }
        $query = new CommonEnchereReferenceQuery();
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
     * @return   CommonEnchereReference|CommonEnchereReference[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereReferencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereReference A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchere`, `libelle`, `quantite`, `isMontant`, `unite`, `pasMin`, `pasMax`, `valeurReference`, `valeurDepartCommune`, `valeurDepart`, `typeBaremeReference`, `ponderationNoteReference`, `noteMaxBaremeRelatif` FROM `EnchereReference` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnchereReference();
            $obj->hydrate($row);
            CommonEnchereReferencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereReference|CommonEnchereReference[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereReference[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereReferencePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereReferencePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::ID, $id, $comparison);
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
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereReferencePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByIdenchere($idenchere = null, $comparison = null)
    {
        if (is_array($idenchere)) {
            $useMinMax = false;
            if (isset($idenchere['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::IDENCHERE, $idenchere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchere['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::IDENCHERE, $idenchere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::IDENCHERE, $idenchere, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the quantite column
     *
     * Example usage:
     * <code>
     * $query->filterByQuantite(1234); // WHERE quantite = 1234
     * $query->filterByQuantite(array(12, 34)); // WHERE quantite IN (12, 34)
     * $query->filterByQuantite(array('min' => 12)); // WHERE quantite >= 12
     * $query->filterByQuantite(array('max' => 12)); // WHERE quantite <= 12
     * </code>
     *
     * @param     mixed $quantite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the isMontant column
     *
     * Example usage:
     * <code>
     * $query->filterByIsmontant('fooValue');   // WHERE isMontant = 'fooValue'
     * $query->filterByIsmontant('%fooValue%'); // WHERE isMontant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ismontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByIsmontant($ismontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ismontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ismontant)) {
                $ismontant = str_replace('*', '%', $ismontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::ISMONTANT, $ismontant, $comparison);
    }

    /**
     * Filter the query on the unite column
     *
     * Example usage:
     * <code>
     * $query->filterByUnite('fooValue');   // WHERE unite = 'fooValue'
     * $query->filterByUnite('%fooValue%'); // WHERE unite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $unite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByUnite($unite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($unite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $unite)) {
                $unite = str_replace('*', '%', $unite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the pasMin column
     *
     * Example usage:
     * <code>
     * $query->filterByPasmin(1234); // WHERE pasMin = 1234
     * $query->filterByPasmin(array(12, 34)); // WHERE pasMin IN (12, 34)
     * $query->filterByPasmin(array('min' => 12)); // WHERE pasMin >= 12
     * $query->filterByPasmin(array('max' => 12)); // WHERE pasMin <= 12
     * </code>
     *
     * @param     mixed $pasmin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByPasmin($pasmin = null, $comparison = null)
    {
        if (is_array($pasmin)) {
            $useMinMax = false;
            if (isset($pasmin['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PASMIN, $pasmin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pasmin['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PASMIN, $pasmin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::PASMIN, $pasmin, $comparison);
    }

    /**
     * Filter the query on the pasMax column
     *
     * Example usage:
     * <code>
     * $query->filterByPasmax(1234); // WHERE pasMax = 1234
     * $query->filterByPasmax(array(12, 34)); // WHERE pasMax IN (12, 34)
     * $query->filterByPasmax(array('min' => 12)); // WHERE pasMax >= 12
     * $query->filterByPasmax(array('max' => 12)); // WHERE pasMax <= 12
     * </code>
     *
     * @param     mixed $pasmax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByPasmax($pasmax = null, $comparison = null)
    {
        if (is_array($pasmax)) {
            $useMinMax = false;
            if (isset($pasmax['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PASMAX, $pasmax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pasmax['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PASMAX, $pasmax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::PASMAX, $pasmax, $comparison);
    }

    /**
     * Filter the query on the valeurReference column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurreference(1234); // WHERE valeurReference = 1234
     * $query->filterByValeurreference(array(12, 34)); // WHERE valeurReference IN (12, 34)
     * $query->filterByValeurreference(array('min' => 12)); // WHERE valeurReference >= 12
     * $query->filterByValeurreference(array('max' => 12)); // WHERE valeurReference <= 12
     * </code>
     *
     * @param     mixed $valeurreference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByValeurreference($valeurreference = null, $comparison = null)
    {
        if (is_array($valeurreference)) {
            $useMinMax = false;
            if (isset($valeurreference['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::VALEURREFERENCE, $valeurreference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurreference['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::VALEURREFERENCE, $valeurreference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::VALEURREFERENCE, $valeurreference, $comparison);
    }

    /**
     * Filter the query on the valeurDepartCommune column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurdepartcommune('fooValue');   // WHERE valeurDepartCommune = 'fooValue'
     * $query->filterByValeurdepartcommune('%fooValue%'); // WHERE valeurDepartCommune LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurdepartcommune The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByValeurdepartcommune($valeurdepartcommune = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurdepartcommune)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurdepartcommune)) {
                $valeurdepartcommune = str_replace('*', '%', $valeurdepartcommune);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::VALEURDEPARTCOMMUNE, $valeurdepartcommune, $comparison);
    }

    /**
     * Filter the query on the valeurDepart column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurdepart(1234); // WHERE valeurDepart = 1234
     * $query->filterByValeurdepart(array(12, 34)); // WHERE valeurDepart IN (12, 34)
     * $query->filterByValeurdepart(array('min' => 12)); // WHERE valeurDepart >= 12
     * $query->filterByValeurdepart(array('max' => 12)); // WHERE valeurDepart <= 12
     * </code>
     *
     * @param     mixed $valeurdepart The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByValeurdepart($valeurdepart = null, $comparison = null)
    {
        if (is_array($valeurdepart)) {
            $useMinMax = false;
            if (isset($valeurdepart['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::VALEURDEPART, $valeurdepart['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurdepart['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::VALEURDEPART, $valeurdepart['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::VALEURDEPART, $valeurdepart, $comparison);
    }

    /**
     * Filter the query on the typeBaremeReference column
     *
     * Example usage:
     * <code>
     * $query->filterByTypebaremereference('fooValue');   // WHERE typeBaremeReference = 'fooValue'
     * $query->filterByTypebaremereference('%fooValue%'); // WHERE typeBaremeReference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typebaremereference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByTypebaremereference($typebaremereference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typebaremereference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typebaremereference)) {
                $typebaremereference = str_replace('*', '%', $typebaremereference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::TYPEBAREMEREFERENCE, $typebaremereference, $comparison);
    }

    /**
     * Filter the query on the ponderationNoteReference column
     *
     * Example usage:
     * <code>
     * $query->filterByPonderationnotereference(1234); // WHERE ponderationNoteReference = 1234
     * $query->filterByPonderationnotereference(array(12, 34)); // WHERE ponderationNoteReference IN (12, 34)
     * $query->filterByPonderationnotereference(array('min' => 12)); // WHERE ponderationNoteReference >= 12
     * $query->filterByPonderationnotereference(array('max' => 12)); // WHERE ponderationNoteReference <= 12
     * </code>
     *
     * @param     mixed $ponderationnotereference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByPonderationnotereference($ponderationnotereference = null, $comparison = null)
    {
        if (is_array($ponderationnotereference)) {
            $useMinMax = false;
            if (isset($ponderationnotereference['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, $ponderationnotereference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ponderationnotereference['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, $ponderationnotereference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::PONDERATIONNOTEREFERENCE, $ponderationnotereference, $comparison);
    }

    /**
     * Filter the query on the noteMaxBaremeRelatif column
     *
     * Example usage:
     * <code>
     * $query->filterByNotemaxbaremerelatif(1234); // WHERE noteMaxBaremeRelatif = 1234
     * $query->filterByNotemaxbaremerelatif(array(12, 34)); // WHERE noteMaxBaremeRelatif IN (12, 34)
     * $query->filterByNotemaxbaremerelatif(array('min' => 12)); // WHERE noteMaxBaremeRelatif >= 12
     * $query->filterByNotemaxbaremerelatif(array('max' => 12)); // WHERE noteMaxBaremeRelatif <= 12
     * </code>
     *
     * @param     mixed $notemaxbaremerelatif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function filterByNotemaxbaremerelatif($notemaxbaremerelatif = null, $comparison = null)
    {
        if (is_array($notemaxbaremerelatif)) {
            $useMinMax = false;
            if (isset($notemaxbaremerelatif['min'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($notemaxbaremerelatif['max'])) {
                $this->addUsingAlias(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereReferencePeer::NOTEMAXBAREMERELATIF, $notemaxbaremerelatif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereReference $commonEnchereReference Object to remove from the list of results
     *
     * @return CommonEnchereReferenceQuery The current query, for fluid interface
     */
    public function prune($commonEnchereReference = null)
    {
        if ($commonEnchereReference) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereReferencePeer::ID), $commonEnchereReference->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereReferencePeer::ORGANISME), $commonEnchereReference->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
