<?php


/**
 * Base class that represents a query for the 'T_Illustration_Fond' table.
 *
 * 
 *
 * @method CommonTIllustrationFondQuery orderByIdIllustrationFond($order = Criteria::ASC) Order by the id_illustration_fond column
 * @method CommonTIllustrationFondQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTIllustrationFondQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method CommonTIllustrationFondQuery orderByNomImage($order = Criteria::ASC) Order by the nom_image column
 * @method CommonTIllustrationFondQuery orderByIdBlobImage($order = Criteria::ASC) Order by the id_blob_image column
 * @method CommonTIllustrationFondQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 *
 * @method CommonTIllustrationFondQuery groupByIdIllustrationFond() Group by the id_illustration_fond column
 * @method CommonTIllustrationFondQuery groupByLibelle() Group by the libelle column
 * @method CommonTIllustrationFondQuery groupByActif() Group by the actif column
 * @method CommonTIllustrationFondQuery groupByNomImage() Group by the nom_image column
 * @method CommonTIllustrationFondQuery groupByIdBlobImage() Group by the id_blob_image column
 * @method CommonTIllustrationFondQuery groupByIdAgent() Group by the id_agent column
 *
 * @method CommonTIllustrationFondQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTIllustrationFondQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTIllustrationFondQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTIllustrationFond findOne(PropelPDO $con = null) Return the first CommonTIllustrationFond matching the query
 * @method CommonTIllustrationFond findOneOrCreate(PropelPDO $con = null) Return the first CommonTIllustrationFond matching the query, or a new CommonTIllustrationFond object populated from the query conditions when no match is found
 *
 * @method CommonTIllustrationFond findOneByLibelle(string $libelle) Return the first CommonTIllustrationFond filtered by the libelle column
 * @method CommonTIllustrationFond findOneByActif(string $actif) Return the first CommonTIllustrationFond filtered by the actif column
 * @method CommonTIllustrationFond findOneByNomImage(string $nom_image) Return the first CommonTIllustrationFond filtered by the nom_image column
 * @method CommonTIllustrationFond findOneByIdBlobImage(string $id_blob_image) Return the first CommonTIllustrationFond filtered by the id_blob_image column
 * @method CommonTIllustrationFond findOneByIdAgent(int $id_agent) Return the first CommonTIllustrationFond filtered by the id_agent column
 *
 * @method array findByIdIllustrationFond(int $id_illustration_fond) Return CommonTIllustrationFond objects filtered by the id_illustration_fond column
 * @method array findByLibelle(string $libelle) Return CommonTIllustrationFond objects filtered by the libelle column
 * @method array findByActif(string $actif) Return CommonTIllustrationFond objects filtered by the actif column
 * @method array findByNomImage(string $nom_image) Return CommonTIllustrationFond objects filtered by the nom_image column
 * @method array findByIdBlobImage(string $id_blob_image) Return CommonTIllustrationFond objects filtered by the id_blob_image column
 * @method array findByIdAgent(int $id_agent) Return CommonTIllustrationFond objects filtered by the id_agent column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTIllustrationFondQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTIllustrationFondQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTIllustrationFond', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTIllustrationFondQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTIllustrationFondQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTIllustrationFondQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTIllustrationFondQuery) {
            return $criteria;
        }
        $query = new CommonTIllustrationFondQuery();
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
     * @return   CommonTIllustrationFond|CommonTIllustrationFond[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTIllustrationFondPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTIllustrationFondPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTIllustrationFond A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdIllustrationFond($key, $con = null)
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
     * @return                 CommonTIllustrationFond A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_illustration_fond`, `libelle`, `actif`, `nom_image`, `id_blob_image`, `id_agent` FROM `T_Illustration_Fond` WHERE `id_illustration_fond` = :p0';
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
            $obj = new CommonTIllustrationFond();
            $obj->hydrate($row);
            CommonTIllustrationFondPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTIllustrationFond|CommonTIllustrationFond[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTIllustrationFond[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_illustration_fond column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIllustrationFond(1234); // WHERE id_illustration_fond = 1234
     * $query->filterByIdIllustrationFond(array(12, 34)); // WHERE id_illustration_fond IN (12, 34)
     * $query->filterByIdIllustrationFond(array('min' => 12)); // WHERE id_illustration_fond >= 12
     * $query->filterByIdIllustrationFond(array('max' => 12)); // WHERE id_illustration_fond <= 12
     * </code>
     *
     * @param     mixed $idIllustrationFond The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByIdIllustrationFond($idIllustrationFond = null, $comparison = null)
    {
        if (is_array($idIllustrationFond)) {
            $useMinMax = false;
            if (isset($idIllustrationFond['min'])) {
                $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $idIllustrationFond['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIllustrationFond['max'])) {
                $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $idIllustrationFond['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $idIllustrationFond, $comparison);
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
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTIllustrationFondPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the nom_image column
     *
     * Example usage:
     * <code>
     * $query->filterByNomImage('fooValue');   // WHERE nom_image = 'fooValue'
     * $query->filterByNomImage('%fooValue%'); // WHERE nom_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomImage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByNomImage($nomImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomImage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomImage)) {
                $nomImage = str_replace('*', '%', $nomImage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTIllustrationFondPeer::NOM_IMAGE, $nomImage, $comparison);
    }

    /**
     * Filter the query on the id_blob_image column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobImage('fooValue');   // WHERE id_blob_image = 'fooValue'
     * $query->filterByIdBlobImage('%fooValue%'); // WHERE id_blob_image LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idBlobImage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByIdBlobImage($idBlobImage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idBlobImage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idBlobImage)) {
                $idBlobImage = str_replace('*', '%', $idBlobImage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ID_BLOB_IMAGE, $idBlobImage, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTIllustrationFondPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTIllustrationFondPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTIllustrationFondPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTIllustrationFond $commonTIllustrationFond Object to remove from the list of results
     *
     * @return CommonTIllustrationFondQuery The current query, for fluid interface
     */
    public function prune($commonTIllustrationFond = null)
    {
        if ($commonTIllustrationFond) {
            $this->addUsingAlias(CommonTIllustrationFondPeer::ID_ILLUSTRATION_FOND, $commonTIllustrationFond->getIdIllustrationFond(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
