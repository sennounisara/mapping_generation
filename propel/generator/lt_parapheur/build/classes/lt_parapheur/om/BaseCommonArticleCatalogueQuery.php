<?php


/**
 * Base class that represents a query for the 'article_catalogue' table.
 *
 * 
 *
 * @method CommonArticleCatalogueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonArticleCatalogueQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonArticleCatalogueQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method CommonArticleCatalogueQuery orderByPrixUnitaire($order = Criteria::ASC) Order by the prix_unitaire column
 * @method CommonArticleCatalogueQuery orderByDelaiLivraison($order = Criteria::ASC) Order by the delai_livraison column
 * @method CommonArticleCatalogueQuery orderByTypeCategorie($order = Criteria::ASC) Order by the type_categorie column
 * @method CommonArticleCatalogueQuery orderByIdMarque($order = Criteria::ASC) Order by the id_marque column
 * @method CommonArticleCatalogueQuery orderByIdFabriquant($order = Criteria::ASC) Order by the id_fabriquant column
 * @method CommonArticleCatalogueQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonArticleCatalogueQuery orderByUniteDelaiLivraison($order = Criteria::ASC) Order by the unite_delai_livraison column
 * @method CommonArticleCatalogueQuery orderByIdCatalogue($order = Criteria::ASC) Order by the id_catalogue column
 * @method CommonArticleCatalogueQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonArticleCatalogueQuery groupById() Group by the id column
 * @method CommonArticleCatalogueQuery groupByReference() Group by the reference column
 * @method CommonArticleCatalogueQuery groupByDescription() Group by the description column
 * @method CommonArticleCatalogueQuery groupByPrixUnitaire() Group by the prix_unitaire column
 * @method CommonArticleCatalogueQuery groupByDelaiLivraison() Group by the delai_livraison column
 * @method CommonArticleCatalogueQuery groupByTypeCategorie() Group by the type_categorie column
 * @method CommonArticleCatalogueQuery groupByIdMarque() Group by the id_marque column
 * @method CommonArticleCatalogueQuery groupByIdFabriquant() Group by the id_fabriquant column
 * @method CommonArticleCatalogueQuery groupByIdBlob() Group by the id_blob column
 * @method CommonArticleCatalogueQuery groupByUniteDelaiLivraison() Group by the unite_delai_livraison column
 * @method CommonArticleCatalogueQuery groupByIdCatalogue() Group by the id_catalogue column
 * @method CommonArticleCatalogueQuery groupByActif() Group by the actif column
 *
 * @method CommonArticleCatalogueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonArticleCatalogueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonArticleCatalogueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonArticleCatalogue findOne(PropelPDO $con = null) Return the first CommonArticleCatalogue matching the query
 * @method CommonArticleCatalogue findOneOrCreate(PropelPDO $con = null) Return the first CommonArticleCatalogue matching the query, or a new CommonArticleCatalogue object populated from the query conditions when no match is found
 *
 * @method CommonArticleCatalogue findOneByReference(string $reference) Return the first CommonArticleCatalogue filtered by the reference column
 * @method CommonArticleCatalogue findOneByDescription(string $description) Return the first CommonArticleCatalogue filtered by the description column
 * @method CommonArticleCatalogue findOneByPrixUnitaire(double $prix_unitaire) Return the first CommonArticleCatalogue filtered by the prix_unitaire column
 * @method CommonArticleCatalogue findOneByDelaiLivraison(int $delai_livraison) Return the first CommonArticleCatalogue filtered by the delai_livraison column
 * @method CommonArticleCatalogue findOneByTypeCategorie(int $type_categorie) Return the first CommonArticleCatalogue filtered by the type_categorie column
 * @method CommonArticleCatalogue findOneByIdMarque(int $id_marque) Return the first CommonArticleCatalogue filtered by the id_marque column
 * @method CommonArticleCatalogue findOneByIdFabriquant(int $id_fabriquant) Return the first CommonArticleCatalogue filtered by the id_fabriquant column
 * @method CommonArticleCatalogue findOneByIdBlob(int $id_blob) Return the first CommonArticleCatalogue filtered by the id_blob column
 * @method CommonArticleCatalogue findOneByUniteDelaiLivraison(int $unite_delai_livraison) Return the first CommonArticleCatalogue filtered by the unite_delai_livraison column
 * @method CommonArticleCatalogue findOneByIdCatalogue(int $id_catalogue) Return the first CommonArticleCatalogue filtered by the id_catalogue column
 * @method CommonArticleCatalogue findOneByActif(boolean $actif) Return the first CommonArticleCatalogue filtered by the actif column
 *
 * @method array findById(int $id) Return CommonArticleCatalogue objects filtered by the id column
 * @method array findByReference(string $reference) Return CommonArticleCatalogue objects filtered by the reference column
 * @method array findByDescription(string $description) Return CommonArticleCatalogue objects filtered by the description column
 * @method array findByPrixUnitaire(double $prix_unitaire) Return CommonArticleCatalogue objects filtered by the prix_unitaire column
 * @method array findByDelaiLivraison(int $delai_livraison) Return CommonArticleCatalogue objects filtered by the delai_livraison column
 * @method array findByTypeCategorie(int $type_categorie) Return CommonArticleCatalogue objects filtered by the type_categorie column
 * @method array findByIdMarque(int $id_marque) Return CommonArticleCatalogue objects filtered by the id_marque column
 * @method array findByIdFabriquant(int $id_fabriquant) Return CommonArticleCatalogue objects filtered by the id_fabriquant column
 * @method array findByIdBlob(int $id_blob) Return CommonArticleCatalogue objects filtered by the id_blob column
 * @method array findByUniteDelaiLivraison(int $unite_delai_livraison) Return CommonArticleCatalogue objects filtered by the unite_delai_livraison column
 * @method array findByIdCatalogue(int $id_catalogue) Return CommonArticleCatalogue objects filtered by the id_catalogue column
 * @method array findByActif(boolean $actif) Return CommonArticleCatalogue objects filtered by the actif column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonArticleCatalogueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonArticleCatalogueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonArticleCatalogue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonArticleCatalogueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonArticleCatalogueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonArticleCatalogueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonArticleCatalogueQuery) {
            return $criteria;
        }
        $query = new CommonArticleCatalogueQuery();
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
     * @return   CommonArticleCatalogue|CommonArticleCatalogue[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonArticleCataloguePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonArticleCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonArticleCatalogue A model object, or null if the key is not found
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
     * @return                 CommonArticleCatalogue A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `reference`, `description`, `prix_unitaire`, `delai_livraison`, `type_categorie`, `id_marque`, `id_fabriquant`, `id_blob`, `unite_delai_livraison`, `id_catalogue`, `actif` FROM `article_catalogue` WHERE `id` = :p0';
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
            $obj = new CommonArticleCatalogue();
            $obj->hydrate($row);
            CommonArticleCataloguePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonArticleCatalogue|CommonArticleCatalogue[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonArticleCatalogue[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID, $keys, Criteria::IN);
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
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%'); // WHERE reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reference)) {
                $reference = str_replace('*', '%', $reference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the prix_unitaire column
     *
     * Example usage:
     * <code>
     * $query->filterByPrixUnitaire(1234); // WHERE prix_unitaire = 1234
     * $query->filterByPrixUnitaire(array(12, 34)); // WHERE prix_unitaire IN (12, 34)
     * $query->filterByPrixUnitaire(array('min' => 12)); // WHERE prix_unitaire >= 12
     * $query->filterByPrixUnitaire(array('max' => 12)); // WHERE prix_unitaire <= 12
     * </code>
     *
     * @param     mixed $prixUnitaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrixUnitaire($prixUnitaire = null, $comparison = null)
    {
        if (is_array($prixUnitaire)) {
            $useMinMax = false;
            if (isset($prixUnitaire['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::PRIX_UNITAIRE, $prixUnitaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($prixUnitaire['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::PRIX_UNITAIRE, $prixUnitaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::PRIX_UNITAIRE, $prixUnitaire, $comparison);
    }

    /**
     * Filter the query on the delai_livraison column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiLivraison(1234); // WHERE delai_livraison = 1234
     * $query->filterByDelaiLivraison(array(12, 34)); // WHERE delai_livraison IN (12, 34)
     * $query->filterByDelaiLivraison(array('min' => 12)); // WHERE delai_livraison >= 12
     * $query->filterByDelaiLivraison(array('max' => 12)); // WHERE delai_livraison <= 12
     * </code>
     *
     * @param     mixed $delaiLivraison The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByDelaiLivraison($delaiLivraison = null, $comparison = null)
    {
        if (is_array($delaiLivraison)) {
            $useMinMax = false;
            if (isset($delaiLivraison['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::DELAI_LIVRAISON, $delaiLivraison['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiLivraison['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::DELAI_LIVRAISON, $delaiLivraison['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::DELAI_LIVRAISON, $delaiLivraison, $comparison);
    }

    /**
     * Filter the query on the type_categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCategorie(1234); // WHERE type_categorie = 1234
     * $query->filterByTypeCategorie(array(12, 34)); // WHERE type_categorie IN (12, 34)
     * $query->filterByTypeCategorie(array('min' => 12)); // WHERE type_categorie >= 12
     * $query->filterByTypeCategorie(array('max' => 12)); // WHERE type_categorie <= 12
     * </code>
     *
     * @param     mixed $typeCategorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByTypeCategorie($typeCategorie = null, $comparison = null)
    {
        if (is_array($typeCategorie)) {
            $useMinMax = false;
            if (isset($typeCategorie['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::TYPE_CATEGORIE, $typeCategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeCategorie['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::TYPE_CATEGORIE, $typeCategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::TYPE_CATEGORIE, $typeCategorie, $comparison);
    }

    /**
     * Filter the query on the id_marque column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMarque(1234); // WHERE id_marque = 1234
     * $query->filterByIdMarque(array(12, 34)); // WHERE id_marque IN (12, 34)
     * $query->filterByIdMarque(array('min' => 12)); // WHERE id_marque >= 12
     * $query->filterByIdMarque(array('max' => 12)); // WHERE id_marque <= 12
     * </code>
     *
     * @param     mixed $idMarque The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdMarque($idMarque = null, $comparison = null)
    {
        if (is_array($idMarque)) {
            $useMinMax = false;
            if (isset($idMarque['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_MARQUE, $idMarque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMarque['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_MARQUE, $idMarque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID_MARQUE, $idMarque, $comparison);
    }

    /**
     * Filter the query on the id_fabriquant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFabriquant(1234); // WHERE id_fabriquant = 1234
     * $query->filterByIdFabriquant(array(12, 34)); // WHERE id_fabriquant IN (12, 34)
     * $query->filterByIdFabriquant(array('min' => 12)); // WHERE id_fabriquant >= 12
     * $query->filterByIdFabriquant(array('max' => 12)); // WHERE id_fabriquant <= 12
     * </code>
     *
     * @param     mixed $idFabriquant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdFabriquant($idFabriquant = null, $comparison = null)
    {
        if (is_array($idFabriquant)) {
            $useMinMax = false;
            if (isset($idFabriquant['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_FABRIQUANT, $idFabriquant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFabriquant['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_FABRIQUANT, $idFabriquant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID_FABRIQUANT, $idFabriquant, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the unite_delai_livraison column
     *
     * Example usage:
     * <code>
     * $query->filterByUniteDelaiLivraison(1234); // WHERE unite_delai_livraison = 1234
     * $query->filterByUniteDelaiLivraison(array(12, 34)); // WHERE unite_delai_livraison IN (12, 34)
     * $query->filterByUniteDelaiLivraison(array('min' => 12)); // WHERE unite_delai_livraison >= 12
     * $query->filterByUniteDelaiLivraison(array('max' => 12)); // WHERE unite_delai_livraison <= 12
     * </code>
     *
     * @param     mixed $uniteDelaiLivraison The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByUniteDelaiLivraison($uniteDelaiLivraison = null, $comparison = null)
    {
        if (is_array($uniteDelaiLivraison)) {
            $useMinMax = false;
            if (isset($uniteDelaiLivraison['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON, $uniteDelaiLivraison['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteDelaiLivraison['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON, $uniteDelaiLivraison['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::UNITE_DELAI_LIVRAISON, $uniteDelaiLivraison, $comparison);
    }

    /**
     * Filter the query on the id_catalogue column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCatalogue(1234); // WHERE id_catalogue = 1234
     * $query->filterByIdCatalogue(array(12, 34)); // WHERE id_catalogue IN (12, 34)
     * $query->filterByIdCatalogue(array('min' => 12)); // WHERE id_catalogue >= 12
     * $query->filterByIdCatalogue(array('max' => 12)); // WHERE id_catalogue <= 12
     * </code>
     *
     * @param     mixed $idCatalogue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdCatalogue($idCatalogue = null, $comparison = null)
    {
        if (is_array($idCatalogue)) {
            $useMinMax = false;
            if (isset($idCatalogue['min'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_CATALOGUE, $idCatalogue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCatalogue['max'])) {
                $this->addUsingAlias(CommonArticleCataloguePeer::ID_CATALOGUE, $idCatalogue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ID_CATALOGUE, $idCatalogue, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(true); // WHERE actif = true
     * $query->filterByActif('yes'); // WHERE actif = true
     * </code>
     *
     * @param     boolean|string $actif The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_string($actif)) {
            $actif = in_array(strtolower($actif), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonArticleCataloguePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonArticleCatalogue $commonArticleCatalogue Object to remove from the list of results
     *
     * @return CommonArticleCatalogueQuery The current query, for fluid interface
     */
    public function prune($commonArticleCatalogue = null)
    {
        if ($commonArticleCatalogue) {
            $this->addUsingAlias(CommonArticleCataloguePeer::ID, $commonArticleCatalogue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
