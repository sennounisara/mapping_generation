<?php


/**
 * Base class that represents a query for the 't_recherche_predifinit' table.
 *
 * 
 *
 * @method TRecherchePredifinitQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TRecherchePredifinitQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TRecherchePredifinitQuery orderByLibelle($order = Criteria::ASC) Order by the LIBELLE column
 * @method TRecherchePredifinitQuery orderByObjetRecherche($order = Criteria::ASC) Order by the OBJET_RECHERCHE column
 *
 * @method TRecherchePredifinitQuery groupById() Group by the ID column
 * @method TRecherchePredifinitQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TRecherchePredifinitQuery groupByLibelle() Group by the LIBELLE column
 * @method TRecherchePredifinitQuery groupByObjetRecherche() Group by the OBJET_RECHERCHE column
 *
 * @method TRecherchePredifinitQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TRecherchePredifinitQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TRecherchePredifinitQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TRecherchePredifinit findOne(PropelPDO $con = null) Return the first TRecherchePredifinit matching the query
 * @method TRecherchePredifinit findOneOrCreate(PropelPDO $con = null) Return the first TRecherchePredifinit matching the query, or a new TRecherchePredifinit object populated from the query conditions when no match is found
 *
 * @method TRecherchePredifinit findOneByIdAgent(int $ID_AGENT) Return the first TRecherchePredifinit filtered by the ID_AGENT column
 * @method TRecherchePredifinit findOneByLibelle(string $LIBELLE) Return the first TRecherchePredifinit filtered by the LIBELLE column
 * @method TRecherchePredifinit findOneByObjetRecherche(string $OBJET_RECHERCHE) Return the first TRecherchePredifinit filtered by the OBJET_RECHERCHE column
 *
 * @method array findById(int $ID) Return TRecherchePredifinit objects filtered by the ID column
 * @method array findByIdAgent(int $ID_AGENT) Return TRecherchePredifinit objects filtered by the ID_AGENT column
 * @method array findByLibelle(string $LIBELLE) Return TRecherchePredifinit objects filtered by the LIBELLE column
 * @method array findByObjetRecherche(string $OBJET_RECHERCHE) Return TRecherchePredifinit objects filtered by the OBJET_RECHERCHE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTRecherchePredifinitQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTRecherchePredifinitQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TRecherchePredifinit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TRecherchePredifinitQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TRecherchePredifinitQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TRecherchePredifinitQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TRecherchePredifinitQuery) {
            return $criteria;
        }
        $query = new TRecherchePredifinitQuery();
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
     * @return   TRecherchePredifinit|TRecherchePredifinit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TRecherchePredifinitPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TRecherchePredifinitPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TRecherchePredifinit A model object, or null if the key is not found
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
     * @return                 TRecherchePredifinit A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_AGENT`, `LIBELLE`, `OBJET_RECHERCHE` FROM `t_recherche_predifinit` WHERE `ID` = :p0';
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
            $obj = new TRecherchePredifinit();
            $obj->hydrate($row);
            TRecherchePredifinitPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TRecherchePredifinit|TRecherchePredifinit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TRecherchePredifinit[]|mixed the list of results, formatted by the current formatter
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
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TRecherchePredifinitPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TRecherchePredifinitPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TRecherchePredifinitPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TRecherchePredifinitPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TRecherchePredifinitPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TRecherchePredifinitPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TRecherchePredifinitPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TRecherchePredifinitPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the LIBELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE LIBELLE = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE LIBELLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TRecherchePredifinitPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the OBJET_RECHERCHE column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetRecherche('fooValue');   // WHERE OBJET_RECHERCHE = 'fooValue'
     * $query->filterByObjetRecherche('%fooValue%'); // WHERE OBJET_RECHERCHE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetRecherche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function filterByObjetRecherche($objetRecherche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetRecherche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetRecherche)) {
                $objetRecherche = str_replace('*', '%', $objetRecherche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TRecherchePredifinitPeer::OBJET_RECHERCHE, $objetRecherche, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TRecherchePredifinit $tRecherchePredifinit Object to remove from the list of results
     *
     * @return TRecherchePredifinitQuery The current query, for fluid interface
     */
    public function prune($tRecherchePredifinit = null)
    {
        if ($tRecherchePredifinit) {
            $this->addUsingAlias(TRecherchePredifinitPeer::ID, $tRecherchePredifinit->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
