<?php


/**
 * Base class that represents a query for the 'EchangePieceJointe' table.
 *
 * 
 *
 * @method CommonEchangePieceJointeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEchangePieceJointeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEchangePieceJointeQuery orderByIdMessage($order = Criteria::ASC) Order by the id_message column
 * @method CommonEchangePieceJointeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonEchangePieceJointeQuery orderByPiece($order = Criteria::ASC) Order by the piece column
 * @method CommonEchangePieceJointeQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonEchangePieceJointeQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonEchangePieceJointeQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 *
 * @method CommonEchangePieceJointeQuery groupById() Group by the id column
 * @method CommonEchangePieceJointeQuery groupByOrganisme() Group by the organisme column
 * @method CommonEchangePieceJointeQuery groupByIdMessage() Group by the id_message column
 * @method CommonEchangePieceJointeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonEchangePieceJointeQuery groupByPiece() Group by the piece column
 * @method CommonEchangePieceJointeQuery groupByHorodatage() Group by the horodatage column
 * @method CommonEchangePieceJointeQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonEchangePieceJointeQuery groupByTaille() Group by the taille column
 *
 * @method CommonEchangePieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEchangePieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEchangePieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEchangePieceJointe findOne(PropelPDO $con = null) Return the first CommonEchangePieceJointe matching the query
 * @method CommonEchangePieceJointe findOneOrCreate(PropelPDO $con = null) Return the first CommonEchangePieceJointe matching the query, or a new CommonEchangePieceJointe object populated from the query conditions when no match is found
 *
 * @method CommonEchangePieceJointe findOneById(int $id) Return the first CommonEchangePieceJointe filtered by the id column
 * @method CommonEchangePieceJointe findOneByOrganisme(string $organisme) Return the first CommonEchangePieceJointe filtered by the organisme column
 * @method CommonEchangePieceJointe findOneByIdMessage(int $id_message) Return the first CommonEchangePieceJointe filtered by the id_message column
 * @method CommonEchangePieceJointe findOneByNomFichier(string $nom_fichier) Return the first CommonEchangePieceJointe filtered by the nom_fichier column
 * @method CommonEchangePieceJointe findOneByPiece(int $piece) Return the first CommonEchangePieceJointe filtered by the piece column
 * @method CommonEchangePieceJointe findOneByHorodatage(resource $horodatage) Return the first CommonEchangePieceJointe filtered by the horodatage column
 * @method CommonEchangePieceJointe findOneByUntrusteddate(string $untrusteddate) Return the first CommonEchangePieceJointe filtered by the untrusteddate column
 * @method CommonEchangePieceJointe findOneByTaille(string $taille) Return the first CommonEchangePieceJointe filtered by the taille column
 *
 * @method array findById(int $id) Return CommonEchangePieceJointe objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEchangePieceJointe objects filtered by the organisme column
 * @method array findByIdMessage(int $id_message) Return CommonEchangePieceJointe objects filtered by the id_message column
 * @method array findByNomFichier(string $nom_fichier) Return CommonEchangePieceJointe objects filtered by the nom_fichier column
 * @method array findByPiece(int $piece) Return CommonEchangePieceJointe objects filtered by the piece column
 * @method array findByHorodatage(resource $horodatage) Return CommonEchangePieceJointe objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonEchangePieceJointe objects filtered by the untrusteddate column
 * @method array findByTaille(string $taille) Return CommonEchangePieceJointe objects filtered by the taille column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchangePieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEchangePieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEchangePieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEchangePieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEchangePieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEchangePieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEchangePieceJointeQuery) {
            return $criteria;
        }
        $query = new CommonEchangePieceJointeQuery();
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
     * @return   CommonEchangePieceJointe|CommonEchangePieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEchangePieceJointePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchangePieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_message`, `nom_fichier`, `piece`, `horodatage`, `untrusteddate`, `taille` FROM `EchangePieceJointe` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEchangePieceJointe();
            $obj->hydrate($row);
            CommonEchangePieceJointePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEchangePieceJointe|CommonEchangePieceJointe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEchangePieceJointe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEchangePieceJointePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEchangePieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEchangePieceJointePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEchangePieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::ID, $id, $comparison);
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
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangePieceJointePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_message column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMessage(1234); // WHERE id_message = 1234
     * $query->filterByIdMessage(array(12, 34)); // WHERE id_message IN (12, 34)
     * $query->filterByIdMessage(array('min' => 12)); // WHERE id_message >= 12
     * $query->filterByIdMessage(array('max' => 12)); // WHERE id_message <= 12
     * </code>
     *
     * @param     mixed $idMessage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdMessage($idMessage = null, $comparison = null)
    {
        if (is_array($idMessage)) {
            $useMinMax = false;
            if (isset($idMessage['min'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::ID_MESSAGE, $idMessage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMessage['max'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::ID_MESSAGE, $idMessage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::ID_MESSAGE, $idMessage, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the piece column
     *
     * Example usage:
     * <code>
     * $query->filterByPiece(1234); // WHERE piece = 1234
     * $query->filterByPiece(array(12, 34)); // WHERE piece IN (12, 34)
     * $query->filterByPiece(array('min' => 12)); // WHERE piece >= 12
     * $query->filterByPiece(array('max' => 12)); // WHERE piece <= 12
     * </code>
     *
     * @param     mixed $piece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPiece($piece = null, $comparison = null)
    {
        if (is_array($piece)) {
            $useMinMax = false;
            if (isset($piece['min'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::PIECE, $piece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piece['max'])) {
                $this->addUsingAlias(CommonEchangePieceJointePeer::PIECE, $piece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::PIECE, $piece, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonEchangePieceJointePeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePieceJointePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEchangePieceJointe $commonEchangePieceJointe Object to remove from the list of results
     *
     * @return CommonEchangePieceJointeQuery The current query, for fluid interface
     */
    public function prune($commonEchangePieceJointe = null)
    {
        if ($commonEchangePieceJointe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEchangePieceJointePeer::ID), $commonEchangePieceJointe->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEchangePieceJointePeer::ORGANISME), $commonEchangePieceJointe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
