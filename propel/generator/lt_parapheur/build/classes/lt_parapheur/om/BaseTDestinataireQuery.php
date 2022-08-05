<?php


/**
 * Base class that represents a query for the 't_destinataire' table.
 *
 * 
 *
 * @method TDestinataireQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TDestinataireQuery orderByNomPrenom($order = Criteria::ASC) Order by the NOM_PRENOM column
 * @method TDestinataireQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 *
 * @method TDestinataireQuery groupById() Group by the ID column
 * @method TDestinataireQuery groupByNomPrenom() Group by the NOM_PRENOM column
 * @method TDestinataireQuery groupByIdEntite() Group by the ID_ENTITE column
 *
 * @method TDestinataireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TDestinataireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TDestinataireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TDestinataire findOne(PropelPDO $con = null) Return the first TDestinataire matching the query
 * @method TDestinataire findOneOrCreate(PropelPDO $con = null) Return the first TDestinataire matching the query, or a new TDestinataire object populated from the query conditions when no match is found
 *
 * @method TDestinataire findOneByNomPrenom(string $NOM_PRENOM) Return the first TDestinataire filtered by the NOM_PRENOM column
 * @method TDestinataire findOneByIdEntite(int $ID_ENTITE) Return the first TDestinataire filtered by the ID_ENTITE column
 *
 * @method array findById(int $ID) Return TDestinataire objects filtered by the ID column
 * @method array findByNomPrenom(string $NOM_PRENOM) Return TDestinataire objects filtered by the NOM_PRENOM column
 * @method array findByIdEntite(int $ID_ENTITE) Return TDestinataire objects filtered by the ID_ENTITE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDestinataireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTDestinataireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TDestinataire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TDestinataireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TDestinataireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TDestinataireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TDestinataireQuery) {
            return $criteria;
        }
        $query = new TDestinataireQuery();
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
     * @return   TDestinataire|TDestinataire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TDestinatairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TDestinatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDestinataire A model object, or null if the key is not found
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
     * @return                 TDestinataire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOM_PRENOM`, `ID_ENTITE` FROM `t_destinataire` WHERE `ID` = :p0';
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
            $obj = new TDestinataire();
            $obj->hydrate($row);
            TDestinatairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TDestinataire|TDestinataire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TDestinataire[]|mixed the list of results, formatted by the current formatter
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
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TDestinatairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TDestinatairePeer::ID, $keys, Criteria::IN);
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
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TDestinatairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TDestinatairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDestinatairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the NOM_PRENOM column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPrenom('fooValue');   // WHERE NOM_PRENOM = 'fooValue'
     * $query->filterByNomPrenom('%fooValue%'); // WHERE NOM_PRENOM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPrenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function filterByNomPrenom($nomPrenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPrenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPrenom)) {
                $nomPrenom = str_replace('*', '%', $nomPrenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDestinatairePeer::NOM_PRENOM, $nomPrenom, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TDestinatairePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TDestinatairePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDestinatairePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TDestinataire $tDestinataire Object to remove from the list of results
     *
     * @return TDestinataireQuery The current query, for fluid interface
     */
    public function prune($tDestinataire = null)
    {
        if ($tDestinataire) {
            $this->addUsingAlias(TDestinatairePeer::ID, $tDestinataire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
