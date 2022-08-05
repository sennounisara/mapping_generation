<?php


/**
 * Base class that represents a query for the 'demande_achat_par_catalogue_article' table.
 *
 * 
 *
 * @method CommonDemandeAchatParCatalogueArticleQuery orderByIdDemande($order = Criteria::ASC) Order by the id_demande column
 * @method CommonDemandeAchatParCatalogueArticleQuery orderByIdArticle($order = Criteria::ASC) Order by the id_article column
 * @method CommonDemandeAchatParCatalogueArticleQuery orderByIdBonCommande($order = Criteria::ASC) Order by the id_bon_commande column
 * @method CommonDemandeAchatParCatalogueArticleQuery orderByQuantite($order = Criteria::ASC) Order by the quantite column
 * @method CommonDemandeAchatParCatalogueArticleQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 *
 * @method CommonDemandeAchatParCatalogueArticleQuery groupByIdDemande() Group by the id_demande column
 * @method CommonDemandeAchatParCatalogueArticleQuery groupByIdArticle() Group by the id_article column
 * @method CommonDemandeAchatParCatalogueArticleQuery groupByIdBonCommande() Group by the id_bon_commande column
 * @method CommonDemandeAchatParCatalogueArticleQuery groupByQuantite() Group by the quantite column
 * @method CommonDemandeAchatParCatalogueArticleQuery groupByStatut() Group by the statut column
 *
 * @method CommonDemandeAchatParCatalogueArticleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDemandeAchatParCatalogueArticleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDemandeAchatParCatalogueArticleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDemandeAchatParCatalogueArticle findOne(PropelPDO $con = null) Return the first CommonDemandeAchatParCatalogueArticle matching the query
 * @method CommonDemandeAchatParCatalogueArticle findOneOrCreate(PropelPDO $con = null) Return the first CommonDemandeAchatParCatalogueArticle matching the query, or a new CommonDemandeAchatParCatalogueArticle object populated from the query conditions when no match is found
 *
 * @method CommonDemandeAchatParCatalogueArticle findOneByIdDemande(int $id_demande) Return the first CommonDemandeAchatParCatalogueArticle filtered by the id_demande column
 * @method CommonDemandeAchatParCatalogueArticle findOneByIdArticle(int $id_article) Return the first CommonDemandeAchatParCatalogueArticle filtered by the id_article column
 * @method CommonDemandeAchatParCatalogueArticle findOneByIdBonCommande(int $id_bon_commande) Return the first CommonDemandeAchatParCatalogueArticle filtered by the id_bon_commande column
 * @method CommonDemandeAchatParCatalogueArticle findOneByQuantite(int $quantite) Return the first CommonDemandeAchatParCatalogueArticle filtered by the quantite column
 * @method CommonDemandeAchatParCatalogueArticle findOneByStatut(int $statut) Return the first CommonDemandeAchatParCatalogueArticle filtered by the statut column
 *
 * @method array findByIdDemande(int $id_demande) Return CommonDemandeAchatParCatalogueArticle objects filtered by the id_demande column
 * @method array findByIdArticle(int $id_article) Return CommonDemandeAchatParCatalogueArticle objects filtered by the id_article column
 * @method array findByIdBonCommande(int $id_bon_commande) Return CommonDemandeAchatParCatalogueArticle objects filtered by the id_bon_commande column
 * @method array findByQuantite(int $quantite) Return CommonDemandeAchatParCatalogueArticle objects filtered by the quantite column
 * @method array findByStatut(int $statut) Return CommonDemandeAchatParCatalogueArticle objects filtered by the statut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDemandeAchatParCatalogueArticleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDemandeAchatParCatalogueArticleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDemandeAchatParCatalogueArticle', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDemandeAchatParCatalogueArticleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDemandeAchatParCatalogueArticleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDemandeAchatParCatalogueArticleQuery) {
            return $criteria;
        }
        $query = new CommonDemandeAchatParCatalogueArticleQuery();
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
                         A Primary key composition: [$id_demande, $id_article]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonDemandeAchatParCatalogueArticle|CommonDemandeAchatParCatalogueArticle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDemandeAchatParCatalogueArticlePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatParCatalogueArticlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDemandeAchatParCatalogueArticle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_demande`, `id_article`, `id_bon_commande`, `quantite`, `statut` FROM `demande_achat_par_catalogue_article` WHERE `id_demande` = :p0 AND `id_article` = :p1';
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
            $obj = new CommonDemandeAchatParCatalogueArticle();
            $obj->hydrate($row);
            CommonDemandeAchatParCatalogueArticlePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDemandeAchatParCatalogueArticle|CommonDemandeAchatParCatalogueArticle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogueArticle[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE id_demande = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE id_demande IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE id_demande >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE id_demande <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the id_article column
     *
     * Example usage:
     * <code>
     * $query->filterByIdArticle(1234); // WHERE id_article = 1234
     * $query->filterByIdArticle(array(12, 34)); // WHERE id_article IN (12, 34)
     * $query->filterByIdArticle(array('min' => 12)); // WHERE id_article >= 12
     * $query->filterByIdArticle(array('max' => 12)); // WHERE id_article <= 12
     * </code>
     *
     * @param     mixed $idArticle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByIdArticle($idArticle = null, $comparison = null)
    {
        if (is_array($idArticle)) {
            $useMinMax = false;
            if (isset($idArticle['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE, $idArticle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idArticle['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE, $idArticle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE, $idArticle, $comparison);
    }

    /**
     * Filter the query on the id_bon_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBonCommande(1234); // WHERE id_bon_commande = 1234
     * $query->filterByIdBonCommande(array(12, 34)); // WHERE id_bon_commande IN (12, 34)
     * $query->filterByIdBonCommande(array('min' => 12)); // WHERE id_bon_commande >= 12
     * $query->filterByIdBonCommande(array('max' => 12)); // WHERE id_bon_commande <= 12
     * </code>
     *
     * @param     mixed $idBonCommande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByIdBonCommande($idBonCommande = null, $comparison = null)
    {
        if (is_array($idBonCommande)) {
            $useMinMax = false;
            if (isset($idBonCommande['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_BON_COMMANDE, $idBonCommande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBonCommande['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_BON_COMMANDE, $idBonCommande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::ID_BON_COMMANDE, $idBonCommande, $comparison);
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
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByQuantite($quantite = null, $comparison = null)
    {
        if (is_array($quantite)) {
            $useMinMax = false;
            if (isset($quantite['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::QUANTITE, $quantite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($quantite['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::QUANTITE, $quantite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::QUANTITE, $quantite, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCatalogueArticlePeer::STATUT, $statut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDemandeAchatParCatalogueArticle $commonDemandeAchatParCatalogueArticle Object to remove from the list of results
     *
     * @return CommonDemandeAchatParCatalogueArticleQuery The current query, for fluid interface
     */
    public function prune($commonDemandeAchatParCatalogueArticle = null)
    {
        if ($commonDemandeAchatParCatalogueArticle) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDemandeAchatParCatalogueArticlePeer::ID_DEMANDE), $commonDemandeAchatParCatalogueArticle->getIdDemande(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDemandeAchatParCatalogueArticlePeer::ID_ARTICLE), $commonDemandeAchatParCatalogueArticle->getIdArticle(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
