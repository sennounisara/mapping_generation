<?php


/**
 * Base class that represents a query for the 'DocumentsAttaches' table.
 *
 * 
 *
 * @method CommonDocumentsAttachesQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonDocumentsAttachesQuery orderByNomDocument($order = Criteria::ASC) Order by the nom_document column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentFr($order = Criteria::ASC) Order by the nom_document_fr column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentEs($order = Criteria::ASC) Order by the nom_document_es column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentEn($order = Criteria::ASC) Order by the nom_document_en column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentSu($order = Criteria::ASC) Order by the nom_document_su column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentDu($order = Criteria::ASC) Order by the nom_document_du column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentCz($order = Criteria::ASC) Order by the nom_document_cz column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentAr($order = Criteria::ASC) Order by the nom_document_ar column
 * @method CommonDocumentsAttachesQuery orderByNomDocumentIt($order = Criteria::ASC) Order by the nom_document_it column
 *
 * @method CommonDocumentsAttachesQuery groupByIdDocument() Group by the id_document column
 * @method CommonDocumentsAttachesQuery groupByNomDocument() Group by the nom_document column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentFr() Group by the nom_document_fr column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentEs() Group by the nom_document_es column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentEn() Group by the nom_document_en column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentSu() Group by the nom_document_su column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentDu() Group by the nom_document_du column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentCz() Group by the nom_document_cz column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentAr() Group by the nom_document_ar column
 * @method CommonDocumentsAttachesQuery groupByNomDocumentIt() Group by the nom_document_it column
 *
 * @method CommonDocumentsAttachesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDocumentsAttachesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDocumentsAttachesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDocumentsAttaches findOne(PropelPDO $con = null) Return the first CommonDocumentsAttaches matching the query
 * @method CommonDocumentsAttaches findOneOrCreate(PropelPDO $con = null) Return the first CommonDocumentsAttaches matching the query, or a new CommonDocumentsAttaches object populated from the query conditions when no match is found
 *
 * @method CommonDocumentsAttaches findOneByNomDocument(string $nom_document) Return the first CommonDocumentsAttaches filtered by the nom_document column
 * @method CommonDocumentsAttaches findOneByNomDocumentFr(string $nom_document_fr) Return the first CommonDocumentsAttaches filtered by the nom_document_fr column
 * @method CommonDocumentsAttaches findOneByNomDocumentEs(string $nom_document_es) Return the first CommonDocumentsAttaches filtered by the nom_document_es column
 * @method CommonDocumentsAttaches findOneByNomDocumentEn(string $nom_document_en) Return the first CommonDocumentsAttaches filtered by the nom_document_en column
 * @method CommonDocumentsAttaches findOneByNomDocumentSu(string $nom_document_su) Return the first CommonDocumentsAttaches filtered by the nom_document_su column
 * @method CommonDocumentsAttaches findOneByNomDocumentDu(string $nom_document_du) Return the first CommonDocumentsAttaches filtered by the nom_document_du column
 * @method CommonDocumentsAttaches findOneByNomDocumentCz(string $nom_document_cz) Return the first CommonDocumentsAttaches filtered by the nom_document_cz column
 * @method CommonDocumentsAttaches findOneByNomDocumentAr(string $nom_document_ar) Return the first CommonDocumentsAttaches filtered by the nom_document_ar column
 * @method CommonDocumentsAttaches findOneByNomDocumentIt(string $nom_document_it) Return the first CommonDocumentsAttaches filtered by the nom_document_it column
 *
 * @method array findByIdDocument(int $id_document) Return CommonDocumentsAttaches objects filtered by the id_document column
 * @method array findByNomDocument(string $nom_document) Return CommonDocumentsAttaches objects filtered by the nom_document column
 * @method array findByNomDocumentFr(string $nom_document_fr) Return CommonDocumentsAttaches objects filtered by the nom_document_fr column
 * @method array findByNomDocumentEs(string $nom_document_es) Return CommonDocumentsAttaches objects filtered by the nom_document_es column
 * @method array findByNomDocumentEn(string $nom_document_en) Return CommonDocumentsAttaches objects filtered by the nom_document_en column
 * @method array findByNomDocumentSu(string $nom_document_su) Return CommonDocumentsAttaches objects filtered by the nom_document_su column
 * @method array findByNomDocumentDu(string $nom_document_du) Return CommonDocumentsAttaches objects filtered by the nom_document_du column
 * @method array findByNomDocumentCz(string $nom_document_cz) Return CommonDocumentsAttaches objects filtered by the nom_document_cz column
 * @method array findByNomDocumentAr(string $nom_document_ar) Return CommonDocumentsAttaches objects filtered by the nom_document_ar column
 * @method array findByNomDocumentIt(string $nom_document_it) Return CommonDocumentsAttaches objects filtered by the nom_document_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDocumentsAttachesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDocumentsAttachesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDocumentsAttaches', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDocumentsAttachesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDocumentsAttachesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDocumentsAttachesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDocumentsAttachesQuery) {
            return $criteria;
        }
        $query = new CommonDocumentsAttachesQuery();
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
     * @return   CommonDocumentsAttaches|CommonDocumentsAttaches[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDocumentsAttachesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentsAttachesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDocumentsAttaches A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDocument($key, $con = null)
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
     * @return                 CommonDocumentsAttaches A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_document`, `nom_document`, `nom_document_fr`, `nom_document_es`, `nom_document_en`, `nom_document_su`, `nom_document_du`, `nom_document_cz`, `nom_document_ar`, `nom_document_it` FROM `DocumentsAttaches` WHERE `id_document` = :p0';
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
            $obj = new CommonDocumentsAttaches();
            $obj->hydrate($row);
            CommonDocumentsAttachesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDocumentsAttaches|CommonDocumentsAttaches[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDocumentsAttaches[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocument(1234); // WHERE id_document = 1234
     * $query->filterByIdDocument(array(12, 34)); // WHERE id_document IN (12, 34)
     * $query->filterByIdDocument(array('min' => 12)); // WHERE id_document >= 12
     * $query->filterByIdDocument(array('max' => 12)); // WHERE id_document <= 12
     * </code>
     *
     * @param     mixed $idDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the nom_document column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocument('fooValue');   // WHERE nom_document = 'fooValue'
     * $query->filterByNomDocument('%fooValue%'); // WHERE nom_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocument($nomDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocument)) {
                $nomDocument = str_replace('*', '%', $nomDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT, $nomDocument, $comparison);
    }

    /**
     * Filter the query on the nom_document_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentFr('fooValue');   // WHERE nom_document_fr = 'fooValue'
     * $query->filterByNomDocumentFr('%fooValue%'); // WHERE nom_document_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentFr($nomDocumentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentFr)) {
                $nomDocumentFr = str_replace('*', '%', $nomDocumentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_FR, $nomDocumentFr, $comparison);
    }

    /**
     * Filter the query on the nom_document_es column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentEs('fooValue');   // WHERE nom_document_es = 'fooValue'
     * $query->filterByNomDocumentEs('%fooValue%'); // WHERE nom_document_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentEs($nomDocumentEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentEs)) {
                $nomDocumentEs = str_replace('*', '%', $nomDocumentEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_ES, $nomDocumentEs, $comparison);
    }

    /**
     * Filter the query on the nom_document_en column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentEn('fooValue');   // WHERE nom_document_en = 'fooValue'
     * $query->filterByNomDocumentEn('%fooValue%'); // WHERE nom_document_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentEn($nomDocumentEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentEn)) {
                $nomDocumentEn = str_replace('*', '%', $nomDocumentEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_EN, $nomDocumentEn, $comparison);
    }

    /**
     * Filter the query on the nom_document_su column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentSu('fooValue');   // WHERE nom_document_su = 'fooValue'
     * $query->filterByNomDocumentSu('%fooValue%'); // WHERE nom_document_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentSu($nomDocumentSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentSu)) {
                $nomDocumentSu = str_replace('*', '%', $nomDocumentSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_SU, $nomDocumentSu, $comparison);
    }

    /**
     * Filter the query on the nom_document_du column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentDu('fooValue');   // WHERE nom_document_du = 'fooValue'
     * $query->filterByNomDocumentDu('%fooValue%'); // WHERE nom_document_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentDu($nomDocumentDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentDu)) {
                $nomDocumentDu = str_replace('*', '%', $nomDocumentDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_DU, $nomDocumentDu, $comparison);
    }

    /**
     * Filter the query on the nom_document_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentCz('fooValue');   // WHERE nom_document_cz = 'fooValue'
     * $query->filterByNomDocumentCz('%fooValue%'); // WHERE nom_document_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentCz($nomDocumentCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentCz)) {
                $nomDocumentCz = str_replace('*', '%', $nomDocumentCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_CZ, $nomDocumentCz, $comparison);
    }

    /**
     * Filter the query on the nom_document_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentAr('fooValue');   // WHERE nom_document_ar = 'fooValue'
     * $query->filterByNomDocumentAr('%fooValue%'); // WHERE nom_document_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentAr($nomDocumentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentAr)) {
                $nomDocumentAr = str_replace('*', '%', $nomDocumentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_AR, $nomDocumentAr, $comparison);
    }

    /**
     * Filter the query on the nom_document_it column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocumentIt('fooValue');   // WHERE nom_document_it = 'fooValue'
     * $query->filterByNomDocumentIt('%fooValue%'); // WHERE nom_document_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocumentIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function filterByNomDocumentIt($nomDocumentIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocumentIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocumentIt)) {
                $nomDocumentIt = str_replace('*', '%', $nomDocumentIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentsAttachesPeer::NOM_DOCUMENT_IT, $nomDocumentIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDocumentsAttaches $commonDocumentsAttaches Object to remove from the list of results
     *
     * @return CommonDocumentsAttachesQuery The current query, for fluid interface
     */
    public function prune($commonDocumentsAttaches = null)
    {
        if ($commonDocumentsAttaches) {
            $this->addUsingAlias(CommonDocumentsAttachesPeer::ID_DOCUMENT, $commonDocumentsAttaches->getIdDocument(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
