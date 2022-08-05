<?php


/**
 * Base class that represents a query for the 'blob_file' table.
 *
 * 
 *
 * @method BlobFileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BlobFileQuery orderByRevision($order = Criteria::ASC) Order by the revision column
 * @method BlobFileQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method BlobFileQuery orderByDeletionDatetime($order = Criteria::ASC) Order by the deletion_datetime column
 * @method BlobFileQuery orderByContenu($order = Criteria::ASC) Order by the contenu column
 * @method BlobFileQuery orderByAnnotation($order = Criteria::ASC) Order by the annotation column
 * @method BlobFileQuery orderByTypeCrypt($order = Criteria::ASC) Order by the TYPE_CRYPT column
 * @method BlobFileQuery orderByVecteur($order = Criteria::ASC) Order by the vecteur column
 *
 * @method BlobFileQuery groupById() Group by the id column
 * @method BlobFileQuery groupByRevision() Group by the revision column
 * @method BlobFileQuery groupByName() Group by the name column
 * @method BlobFileQuery groupByDeletionDatetime() Group by the deletion_datetime column
 * @method BlobFileQuery groupByContenu() Group by the contenu column
 * @method BlobFileQuery groupByAnnotation() Group by the annotation column
 * @method BlobFileQuery groupByTypeCrypt() Group by the TYPE_CRYPT column
 * @method BlobFileQuery groupByVecteur() Group by the vecteur column
 *
 * @method BlobFileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BlobFileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BlobFileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BlobFile findOne(PropelPDO $con = null) Return the first BlobFile matching the query
 * @method BlobFile findOneOrCreate(PropelPDO $con = null) Return the first BlobFile matching the query, or a new BlobFile object populated from the query conditions when no match is found
 *
 * @method BlobFile findOneById(int $id) Return the first BlobFile filtered by the id column
 * @method BlobFile findOneByRevision(int $revision) Return the first BlobFile filtered by the revision column
 * @method BlobFile findOneByName(string $name) Return the first BlobFile filtered by the name column
 * @method BlobFile findOneByDeletionDatetime(string $deletion_datetime) Return the first BlobFile filtered by the deletion_datetime column
 * @method BlobFile findOneByContenu(string $contenu) Return the first BlobFile filtered by the contenu column
 * @method BlobFile findOneByAnnotation(string $annotation) Return the first BlobFile filtered by the annotation column
 * @method BlobFile findOneByTypeCrypt(string $TYPE_CRYPT) Return the first BlobFile filtered by the TYPE_CRYPT column
 * @method BlobFile findOneByVecteur(string $vecteur) Return the first BlobFile filtered by the vecteur column
 *
 * @method array findById(int $id) Return BlobFile objects filtered by the id column
 * @method array findByRevision(int $revision) Return BlobFile objects filtered by the revision column
 * @method array findByName(string $name) Return BlobFile objects filtered by the name column
 * @method array findByDeletionDatetime(string $deletion_datetime) Return BlobFile objects filtered by the deletion_datetime column
 * @method array findByContenu(string $contenu) Return BlobFile objects filtered by the contenu column
 * @method array findByAnnotation(string $annotation) Return BlobFile objects filtered by the annotation column
 * @method array findByTypeCrypt(string $TYPE_CRYPT) Return BlobFile objects filtered by the TYPE_CRYPT column
 * @method array findByVecteur(string $vecteur) Return BlobFile objects filtered by the vecteur column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseBlobFileQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBlobFileQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'BlobFile', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BlobFileQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   BlobFileQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BlobFileQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BlobFileQuery) {
            return $criteria;
        }
        $query = new BlobFileQuery();
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
                         A Primary key composition: [$id, $revision]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   BlobFile|BlobFile[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BlobFilePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BlobFilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 BlobFile A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `revision`, `name`, `deletion_datetime`, `contenu`, `annotation`, `TYPE_CRYPT`, `vecteur` FROM `blob_file` WHERE `id` = :p0 AND `revision` = :p1';
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
            $obj = new BlobFile();
            $obj->hydrate($row);
            BlobFilePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return BlobFile|BlobFile[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|BlobFile[]|mixed the list of results, formatted by the current formatter
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
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(BlobFilePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(BlobFilePeer::REVISION, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(BlobFilePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(BlobFilePeer::REVISION, $key[1], Criteria::EQUAL);
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
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(BlobFilePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(BlobFilePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the revision column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE revision = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE revision IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE revision >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE revision <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(BlobFilePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(BlobFilePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the deletion_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletionDatetime('2011-03-14'); // WHERE deletion_datetime = '2011-03-14'
     * $query->filterByDeletionDatetime('now'); // WHERE deletion_datetime = '2011-03-14'
     * $query->filterByDeletionDatetime(array('max' => 'yesterday')); // WHERE deletion_datetime > '2011-03-13'
     * </code>
     *
     * @param     mixed $deletionDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByDeletionDatetime($deletionDatetime = null, $comparison = null)
    {
        if (is_array($deletionDatetime)) {
            $useMinMax = false;
            if (isset($deletionDatetime['min'])) {
                $this->addUsingAlias(BlobFilePeer::DELETION_DATETIME, $deletionDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletionDatetime['max'])) {
                $this->addUsingAlias(BlobFilePeer::DELETION_DATETIME, $deletionDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::DELETION_DATETIME, $deletionDatetime, $comparison);
    }

    /**
     * Filter the query on the contenu column
     *
     * Example usage:
     * <code>
     * $query->filterByContenu('fooValue');   // WHERE contenu = 'fooValue'
     * $query->filterByContenu('%fooValue%'); // WHERE contenu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByContenu($contenu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenu)) {
                $contenu = str_replace('*', '%', $contenu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::CONTENU, $contenu, $comparison);
    }

    /**
     * Filter the query on the annotation column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnotation('fooValue');   // WHERE annotation = 'fooValue'
     * $query->filterByAnnotation('%fooValue%'); // WHERE annotation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $annotation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByAnnotation($annotation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($annotation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $annotation)) {
                $annotation = str_replace('*', '%', $annotation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::ANNOTATION, $annotation, $comparison);
    }

    /**
     * Filter the query on the TYPE_CRYPT column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCrypt('fooValue');   // WHERE TYPE_CRYPT = 'fooValue'
     * $query->filterByTypeCrypt('%fooValue%'); // WHERE TYPE_CRYPT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeCrypt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByTypeCrypt($typeCrypt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeCrypt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeCrypt)) {
                $typeCrypt = str_replace('*', '%', $typeCrypt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::TYPE_CRYPT, $typeCrypt, $comparison);
    }

    /**
     * Filter the query on the vecteur column
     *
     * Example usage:
     * <code>
     * $query->filterByVecteur('fooValue');   // WHERE vecteur = 'fooValue'
     * $query->filterByVecteur('%fooValue%'); // WHERE vecteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $vecteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function filterByVecteur($vecteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($vecteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $vecteur)) {
                $vecteur = str_replace('*', '%', $vecteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BlobFilePeer::VECTEUR, $vecteur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   BlobFile $blobFile Object to remove from the list of results
     *
     * @return BlobFileQuery The current query, for fluid interface
     */
    public function prune($blobFile = null)
    {
        if ($blobFile) {
            $this->addCond('pruneCond0', $this->getAliasedColName(BlobFilePeer::ID), $blobFile->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(BlobFilePeer::REVISION), $blobFile->getRevision(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
