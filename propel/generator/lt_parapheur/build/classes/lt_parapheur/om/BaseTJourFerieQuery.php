<?php


/**
 * Base class that represents a query for the 't_jour_ferie' table.
 *
 * 
 *
 * @method TJourFerieQuery orderByIdJourFerie($order = Criteria::ASC) Order by the ID_JOUR_FERIE column
 * @method TJourFerieQuery orderByLibelleJourFerie($order = Criteria::ASC) Order by the LIBELLE_JOUR_FERIE column
 * @method TJourFerieQuery orderByJour($order = Criteria::ASC) Order by the JOUR column
 * @method TJourFerieQuery orderByMois($order = Criteria::ASC) Order by the MOIS column
 * @method TJourFerieQuery orderByAnnee($order = Criteria::ASC) Order by the ANNEE column
 *
 * @method TJourFerieQuery groupByIdJourFerie() Group by the ID_JOUR_FERIE column
 * @method TJourFerieQuery groupByLibelleJourFerie() Group by the LIBELLE_JOUR_FERIE column
 * @method TJourFerieQuery groupByJour() Group by the JOUR column
 * @method TJourFerieQuery groupByMois() Group by the MOIS column
 * @method TJourFerieQuery groupByAnnee() Group by the ANNEE column
 *
 * @method TJourFerieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TJourFerieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TJourFerieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TJourFerie findOne(PropelPDO $con = null) Return the first TJourFerie matching the query
 * @method TJourFerie findOneOrCreate(PropelPDO $con = null) Return the first TJourFerie matching the query, or a new TJourFerie object populated from the query conditions when no match is found
 *
 * @method TJourFerie findOneByLibelleJourFerie(string $LIBELLE_JOUR_FERIE) Return the first TJourFerie filtered by the LIBELLE_JOUR_FERIE column
 * @method TJourFerie findOneByJour(int $JOUR) Return the first TJourFerie filtered by the JOUR column
 * @method TJourFerie findOneByMois(int $MOIS) Return the first TJourFerie filtered by the MOIS column
 * @method TJourFerie findOneByAnnee(int $ANNEE) Return the first TJourFerie filtered by the ANNEE column
 *
 * @method array findByIdJourFerie(int $ID_JOUR_FERIE) Return TJourFerie objects filtered by the ID_JOUR_FERIE column
 * @method array findByLibelleJourFerie(string $LIBELLE_JOUR_FERIE) Return TJourFerie objects filtered by the LIBELLE_JOUR_FERIE column
 * @method array findByJour(int $JOUR) Return TJourFerie objects filtered by the JOUR column
 * @method array findByMois(int $MOIS) Return TJourFerie objects filtered by the MOIS column
 * @method array findByAnnee(int $ANNEE) Return TJourFerie objects filtered by the ANNEE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTJourFerieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTJourFerieQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TJourFerie', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TJourFerieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TJourFerieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TJourFerieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TJourFerieQuery) {
            return $criteria;
        }
        $query = new TJourFerieQuery();
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
     * @return   TJourFerie|TJourFerie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TJourFeriePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TJourFeriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TJourFerie A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdJourFerie($key, $con = null)
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
     * @return                 TJourFerie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_JOUR_FERIE`, `LIBELLE_JOUR_FERIE`, `JOUR`, `MOIS`, `ANNEE` FROM `t_jour_ferie` WHERE `ID_JOUR_FERIE` = :p0';
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
            $obj = new TJourFerie();
            $obj->hydrate($row);
            TJourFeriePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TJourFerie|TJourFerie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TJourFerie[]|mixed the list of results, formatted by the current formatter
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
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_JOUR_FERIE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJourFerie(1234); // WHERE ID_JOUR_FERIE = 1234
     * $query->filterByIdJourFerie(array(12, 34)); // WHERE ID_JOUR_FERIE IN (12, 34)
     * $query->filterByIdJourFerie(array('min' => 12)); // WHERE ID_JOUR_FERIE >= 12
     * $query->filterByIdJourFerie(array('max' => 12)); // WHERE ID_JOUR_FERIE <= 12
     * </code>
     *
     * @param     mixed $idJourFerie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByIdJourFerie($idJourFerie = null, $comparison = null)
    {
        if (is_array($idJourFerie)) {
            $useMinMax = false;
            if (isset($idJourFerie['min'])) {
                $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $idJourFerie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idJourFerie['max'])) {
                $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $idJourFerie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $idJourFerie, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_JOUR_FERIE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleJourFerie('fooValue');   // WHERE LIBELLE_JOUR_FERIE = 'fooValue'
     * $query->filterByLibelleJourFerie('%fooValue%'); // WHERE LIBELLE_JOUR_FERIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleJourFerie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByLibelleJourFerie($libelleJourFerie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleJourFerie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleJourFerie)) {
                $libelleJourFerie = str_replace('*', '%', $libelleJourFerie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TJourFeriePeer::LIBELLE_JOUR_FERIE, $libelleJourFerie, $comparison);
    }

    /**
     * Filter the query on the JOUR column
     *
     * Example usage:
     * <code>
     * $query->filterByJour(1234); // WHERE JOUR = 1234
     * $query->filterByJour(array(12, 34)); // WHERE JOUR IN (12, 34)
     * $query->filterByJour(array('min' => 12)); // WHERE JOUR >= 12
     * $query->filterByJour(array('max' => 12)); // WHERE JOUR <= 12
     * </code>
     *
     * @param     mixed $jour The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByJour($jour = null, $comparison = null)
    {
        if (is_array($jour)) {
            $useMinMax = false;
            if (isset($jour['min'])) {
                $this->addUsingAlias(TJourFeriePeer::JOUR, $jour['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($jour['max'])) {
                $this->addUsingAlias(TJourFeriePeer::JOUR, $jour['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TJourFeriePeer::JOUR, $jour, $comparison);
    }

    /**
     * Filter the query on the MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByMois(1234); // WHERE MOIS = 1234
     * $query->filterByMois(array(12, 34)); // WHERE MOIS IN (12, 34)
     * $query->filterByMois(array('min' => 12)); // WHERE MOIS >= 12
     * $query->filterByMois(array('max' => 12)); // WHERE MOIS <= 12
     * </code>
     *
     * @param     mixed $mois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByMois($mois = null, $comparison = null)
    {
        if (is_array($mois)) {
            $useMinMax = false;
            if (isset($mois['min'])) {
                $this->addUsingAlias(TJourFeriePeer::MOIS, $mois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mois['max'])) {
                $this->addUsingAlias(TJourFeriePeer::MOIS, $mois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TJourFeriePeer::MOIS, $mois, $comparison);
    }

    /**
     * Filter the query on the ANNEE column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee(1234); // WHERE ANNEE = 1234
     * $query->filterByAnnee(array(12, 34)); // WHERE ANNEE IN (12, 34)
     * $query->filterByAnnee(array('min' => 12)); // WHERE ANNEE >= 12
     * $query->filterByAnnee(array('max' => 12)); // WHERE ANNEE <= 12
     * </code>
     *
     * @param     mixed $annee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(TJourFeriePeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(TJourFeriePeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TJourFeriePeer::ANNEE, $annee, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TJourFerie $tJourFerie Object to remove from the list of results
     *
     * @return TJourFerieQuery The current query, for fluid interface
     */
    public function prune($tJourFerie = null)
    {
        if ($tJourFerie) {
            $this->addUsingAlias(TJourFeriePeer::ID_JOUR_FERIE, $tJourFerie->getIdJourFerie(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
